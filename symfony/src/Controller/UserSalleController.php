<?php

namespace App\Controller;

use App\Entity\UserSalle;
use App\Form\UserSalleType;
use App\Repository\UserSalleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user/salle")
 */
class UserSalleController extends Controller
{
    /**
     * @Route("/", name="user_salle_index", methods="GET")
     */
    public function index(UserSalleRepository $userSalleRepository): Response
    {
        return $this->render('user_salle/index.html.twig', ['user_salles' => $userSalleRepository->findAll()]);
    }

    /**
     * @Route("/new", name="user_salle_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $userSalle = new UserSalle();
        $form = $this->createForm(UserSalleType::class, $userSalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userSalle);
            $em->flush();

            return $this->redirectToRoute('user_salle_index');
        }

        return $this->render('user_salle/new.html.twig', [
            'user_salle' => $userSalle,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_salle_show", methods="GET")
     */
    public function show(UserSalle $userSalle): Response
    {
        return $this->render('user_salle/show.html.twig', ['user_salle' => $userSalle]);
    }

    /**
     * @Route("/{id}/edit", name="user_salle_edit", methods="GET|POST")
     */
    public function edit(Request $request, UserSalle $userSalle): Response
    {
        $form = $this->createForm(UserSalleType::class, $userSalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_salle_edit', ['id' => $userSalle->getId()]);
        }

        return $this->render('user_salle/edit.html.twig', [
            'user_salle' => $userSalle,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_salle_delete", methods="DELETE")
     */
    public function delete(Request $request, UserSalle $userSalle): Response
    {
        if ($this->isCsrfTokenValid('delete'.$userSalle->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($userSalle);
            $em->flush();
        }

        return $this->redirectToRoute('user_salle_index');
    }
}
