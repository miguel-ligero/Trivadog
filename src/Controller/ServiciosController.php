<?php

namespace App\Controller;

use App\Entity\Servicios;
use App\Form\ServiciosType;
use App\Repository\ServiciosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/servicios")
 */
class ServiciosController extends AbstractController
{
    
    public function index(ServiciosRepository $serviciosRepository): Response
    {
        return $this->render('servicios/index.html.twig', [
            'servicios' => $serviciosRepository->findAll(),
        ]);
    }

    
    public function new(Request $request): Response
    {
        $servicio = new Servicios();
        $form = $this->createForm(ServiciosType::class, $servicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($servicio);
            $entityManager->flush();

            return $this->redirectToRoute('servicios_index');
        }

        return $this->render('servicios/new.html.twig', [
            'servicio' => $servicio,
            'form' => $form->createView(),
        ]);
    }

    
    public function show(Servicios $servicio): Response
    {
        return $this->render('servicios/show.html.twig', [
            'servicio' => $servicio,
        ]);
    }

    
    public function edit(Request $request, Servicios $servicio): Response
    {
        $form = $this->createForm(ServiciosType::class, $servicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('servicios_index');
        }

        return $this->render('servicios/edit.html.twig', [
            'servicio' => $servicio,
            'form' => $form->createView(),
        ]);
    }

    
    public function delete(Request $request, Servicios $servicio): Response
    {
        if ($this->isCsrfTokenValid('delete'.$servicio->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($servicio);
            $entityManager->flush();
        }

        return $this->redirectToRoute('servicios_index');
    }
}
