<?php

namespace App\Controller;

use App\Entity\ModuleSalle;
use App\Form\ModuleSalleType;
use App\Repository\ModuleSalleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/module/salle")
 */
class ModuleSalleController extends Controller
{
    /**
     * @Route("/", name="module_salle_index", methods="GET")
     */
    public function index(ModuleSalleRepository $moduleSalleRepository): Response
    {
        return $this->render('module_salle/index.html.twig', ['module_salle' => $moduleSalleRepository->findAll()]);
    }

    /**
     * @Route("/new", name="module_salle_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $moduleSalle = new ModuleSalle();
        $form = $this->createForm(ModuleSalleType::class, $moduleSalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($moduleSalle);
            $em->flush();

            return $this->redirectToRoute('module_salle_index');
        }

        return $this->render('module_salle/new.html.twig', [
            'module_salle' => $moduleSalle,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="module_salle_show", methods="GET")
     */
    public function show(ModuleSalle $moduleSalle): Response
    {
        return $this->render('module_salle/show.html.twig', ['module_salle' => $moduleSalle]);
    }

    /**
     * @Route("/{id}/edit", name="module_salle_edit", methods="GET|POST")
     */
    public function edit(Request $request, ModuleSalle $moduleSalle): Response
    {
        $form = $this->createForm(ModuleSalleType::class, $moduleSalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('module_salle_edit', ['id' => $moduleSalle->getId()]);
        }

        return $this->render('module_salle/edit.html.twig', [
            'module_salle' => $moduleSalle,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="module_salle_delete", methods="DELETE")
     */
    public function delete(Request $request, ModuleSalle $moduleSalle): Response
    {
        if ($this->isCsrfTokenValid('delete'.$moduleSalle->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($moduleSalle);
            $em->flush();
        }

        return $this->redirectToRoute('module_salle_index');
    }
}
