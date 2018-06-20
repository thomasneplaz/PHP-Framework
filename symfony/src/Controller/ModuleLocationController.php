<?php

namespace App\Controller;

use App\Entity\ModuleLocation;
use App\Form\ModuleLocationType;
use App\Repository\ModuleLocationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/module/location")
 */
class ModuleLocationController extends Controller
{
    /**
     * @Route("/", name="module_location_index", methods="GET")
     */
    public function index(ModuleLocationRepository $moduleLocationRepository): Response
    {
        return $this->render('module_location/index.html.twig', ['module_locations' => $moduleLocationRepository->findAll()]);
    }

    /**
     * @Route("/new", name="module_location_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $moduleLocation = new ModuleLocation();
        $form = $this->createForm(ModuleLocationType::class, $moduleLocation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($moduleLocation);
            $em->flush();

            return $this->redirectToRoute('module_location_index');
        }

        return $this->render('module_location/new.html.twig', [
            'module_location' => $moduleLocation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="module_location_show", methods="GET")
     */
    public function show(ModuleLocation $moduleLocation): Response
    {
        return $this->render('module_location/show.html.twig', ['module_location' => $moduleLocation]);
    }

    /**
     * @Route("/{id}/edit", name="module_location_edit", methods="GET|POST")
     */
    public function edit(Request $request, ModuleLocation $moduleLocation): Response
    {
        $form = $this->createForm(ModuleLocationType::class, $moduleLocation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('module_location_edit', ['id' => $moduleLocation->getId()]);
        }

        return $this->render('module_location/edit.html.twig', [
            'module_location' => $moduleLocation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="module_location_delete", methods="DELETE")
     */
    public function delete(Request $request, ModuleLocation $moduleLocation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$moduleLocation->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($moduleLocation);
            $em->flush();
        }

        return $this->redirectToRoute('module_location_index');
    }
}
