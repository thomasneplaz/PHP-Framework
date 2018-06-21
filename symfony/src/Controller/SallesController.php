<?php

namespace App\Controller;

use App\Entity\Salles;
use App\Entity\User;
use App\Form\SallesType;
use App\Repository\SallesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

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
     * @Security("has_role('ROLE_USER')")
     * @Route("/new", name="salles_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $salle = new Salles();
        $salle->setClient($this->get('security.token_storage')->getToken()->getUser());
        $form = $this->createForm(SallesType::class, $salle)
            ->add('save', SubmitType::Class, [
                'label' => 'Ajouter'
                ])
        ;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($salle);
            $em->flush();

            return $this->redirectToRoute('salles_index');
        }

        return $this->render('salles/new.html.twig', [
            'salle' => $salle,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="salles_show", methods="GET")
     */
    public function show(User $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $salle = $em->getRepository(Salles::class)->findBy(['client'=> $id]);

        return $this->render('salles/show.html.twig', ['salles' => $salle]);
    }

    /**
     * @Security("has_role('ROLE_USER')")
     * @Route("/{id}/edit", name="salles_edit", methods="GET|POST")
     */
    public function edit(Request $request, Salles $salle): Response
    {
        $form = $this->createForm(SallesType::class, $salle)
            ->add('save', SubmitType::Class, [
                'label' => 'Modifier'
            ])
        ;
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('salles_show', ['id' => $this->get('security.token_storage')->getToken()->getUser()->getId()]);
        }

        return $this->render('salles/edit.html.twig', [
            'salle' => $salle,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Security("has_role('ROLE_USER')")
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
