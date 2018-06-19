<?php

namespace App\Controller;

use App\Entity\Salles;
use App\Form\SallesType;
use App\Repository\SallesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * @Route("/salles")
 */
class SallesController extends Controller
{
    /**
     * @Route("/", name="salles_index", methods="GET")
     */
    public function index(SallesRepository $sallesRepository): Response
    {
        return $this->render('salles/index.html.twig', ['salles' => $sallesRepository->findAll()]);
    }

    /**
     * @Route("/new", name="salles_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $salle = new Salles();
        $form = $this->createForm(SallesType::class, $salle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($salle);
            $em->flush();

            return $this->redirectToRoute('salles_index');
        }

        $form->add('save', SubmitType::class, [
            'label'=> 'Ajouter'
        ]);

        return $this->render('salles/new.html.twig', [
            'salle' => $salle,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="salles_show", methods="GET")
     */
    public function show(Salles $salle): Response
    {
        return $this->render('salles/show.html.twig', ['salle' => $salle]);
    }

    /**
     * @Route("/{id}/edit", name="salles_edit", methods="GET|POST")
     */
    public function edit(Request $request, Salles $salle): Response
    {
        $form = $this->createForm(SallesType::class, $salle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('salles_edit', ['id' => $salle->getId()]);
        }

        $form->add('save', SubmitType::class, [
            'label'=> 'Modifier'
        ]);

        return $this->render('salles/edit.html.twig', [
            'salle' => $salle,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="salles_delete", methods="DELETE")
     */
    public function delete(Request $request, Salles $salle): Response
    {
        if ($this->isCsrfTokenValid('delete'.$salle->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($salle);
            $em->flush();
        }

        return $this->redirectToRoute('salles_index');
    }
}
