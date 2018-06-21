<?php

namespace App\Controller;

use App\Entity\Location;
use App\Entity\Salles;
use App\Entity\User;
use App\Form\LocationType;
use App\Repository\LocationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/location")
 */
class LocationController extends Controller
{
    /**
     * @Route("/", name="location_index", methods="GET")
     */
    public function index(LocationRepository $locationRepository): Response
    {
        return $this->render('location/index.html.twig', ['locations' => $locationRepository->findAll()]);
    }

    /**
     * @Route("/new/{id}", name="location_new", methods="GET|POST")
     */
    public function new(Request $request, Salles $id): Response
    {
        $salle = new Salles();
        $em = $this->getDoctrine()->getManager();
        
        $salle = $em->getRepository(Salles::Class)->find($id);

        $location = new Location();
        $location->setSalle($salle);
        $location->setClient($this->get('security.token_storage')->getToken()->getUser());
        $form = $this->createForm(LocationType::class, $location);
        $form->add('save',SubmitType::Class, [
            'label' => 'Valider la réservation'
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($location);
            $em->flush();

            return $this->redirectToRoute('location_index');
        }

        return $this->render('location/new.html.twig', [
            'location' => $location,
            'salle' => $salle,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="location_show", methods="GET")
     */
    public function show(User $id): Response
    {
        $em = $this->getDoctrine()->getManager();

        $location = $em->getRepository(Location::Class)->findBy(['client'=> $id]);

        return $this->render('location/show.html.twig', ['locations'=> $location]);
    }

    /**
     * @Route("/{id}/edit", name="location_edit", methods="GET|POST")
     */
    public function edit(Request $request, Location $location): Response
    {
        $form = $this->createForm(LocationType::class, $location);
        $form->add('save',SubmitType::Class, [
            'label' => 'Modifier la réservation'
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('location_edit', ['id' => $location->getId()]);
        }

        return $this->render('location/edit.html.twig', [
            'location' => $location,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="location_delete", methods="DELETE")
     */
    public function delete(Request $request, Location $location): Response
    {
        if ($this->isCsrfTokenValid('delete'.$location->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($location);
            $em->flush();
        }

        return $this->redirectToRoute('location_index');
    }
}
