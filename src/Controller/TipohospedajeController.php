<?php

namespace App\Controller;

use App\Entity\Tipohospedaje;
use App\Form\TipohospedajeType;
use App\Repository\TipohospedajeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tipohospedaje")
 */
class TipohospedajeController extends AbstractController
{
    
    public function index(TipohospedajeRepository $tipohospedajeRepository): Response
    {
        return $this->render('tipohospedaje/index.html.twig', [
            'tipohospedajes' => $tipohospedajeRepository->findAll(),
        ]);
    }

    
    public function new(Request $request): Response
    {
        $tipohospedaje = new Tipohospedaje();
        $form = $this->createForm(TipohospedajeType::class, $tipohospedaje);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tipohospedaje);
            $entityManager->flush();

            return $this->redirectToRoute('tipohospedaje_index');
        }

        return $this->render('tipohospedaje/new.html.twig', [
            'tipohospedaje' => $tipohospedaje,
            'form' => $form->createView(),
        ]);
    }

    
    public function show(Tipohospedaje $tipohospedaje): Response
    {
        return $this->render('tipohospedaje/show.html.twig', [
            'tipohospedaje' => $tipohospedaje,
        ]);
    }

    
    public function edit(Request $request, Tipohospedaje $tipohospedaje): Response
    {
        $form = $this->createForm(TipohospedajeType::class, $tipohospedaje);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipohospedaje_index');
        }

        return $this->render('tipohospedaje/edit.html.twig', [
            'tipohospedaje' => $tipohospedaje,
            'form' => $form->createView(),
        ]);
    }

    public function delete(Request $request, Tipohospedaje $tipohospedaje): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tipohospedaje->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tipohospedaje);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tipohospedaje_index');
    }
}
