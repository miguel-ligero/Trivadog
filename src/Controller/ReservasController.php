<?php

namespace App\Controller;

use App\Entity\Reservas;
use App\Entity\Habitaciones;
use App\Entity\Clientes;
use App\Entity\Hospedaje;
use App\Form\ReservasType;
use App\Repository\ReservasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @Route("/reservas")
 */
class ReservasController extends AbstractController
{
    
    public function index(ReservasRepository $reservasRepository): Response
    {
        return $this->render('reservas/index.html.twig', [
            'reservas' => $reservasRepository->findAll(),
        ]);
    }

    
    public function new(Request $request): Response
    {
        $reserva = new Reservas();
        $form = $this->createForm(ReservasType::class, $reserva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reserva);
            $entityManager->flush();

            return $this->redirectToRoute('reservas_index');
        }

        return $this->render('reservas/new.html.twig', [
            'reserva' => $reserva,
            'form' => $form->createView(),
        ]);
    }

    
    public function show(Reservas $reserva): Response
    {
        return $this->render('reservas/show.html.twig', [
            'reserva' => $reserva,
        ]);
    }

    
    public function edit(Request $request, Reservas $reserva): Response
    {
        $form = $this->createForm(ReservasType::class, $reserva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservas_index');
        }

        return $this->render('reservas/edit.html.twig', [
            'reserva' => $reserva,
            'form' => $form->createView(),
        ]);
    }

    
    public function delete(Request $request, Reservas $reserva): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reserva->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reserva);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservas_index');
    }

    public function list(Request $request, $idHabitacion)/*Método para cargar el resumen y confirmación de la reserva*/
    {   
        $room = $this->getDoctrine()->getRepository(Habitaciones::class)->find($idHabitacion);
        $destination = $request->query->get("destination");
        $typehosting = $request->query->get("typehosting");
        
        $from = $request->query->get("from");
        $fromdatapicker = $this->dateFormatDataPicker($from);
        
        $to = $request->query->get("to");
        $todatapicker = $this->dateFormatDataPicker($to);
        
        $adults = $request->query->get("adults");
        $children = $request->query->get("children");
        $pets = $request->query->get("pets");
        $days = $request->query->get("days");
        
        return $this->render('reservas/reservas.html.twig', [
            'room' => $room,
            'from' => $from,
            'to' => $to,
            'fromdatapicker' => $fromdatapicker,
            'todatapicker' => $todatapicker,
            'destination' => $destination,
            'adults' => $adults,
            'children' => $children,
            'pets' => $pets,
            'typehosting' => $typehosting,
            'days' => $days,
        ]);
    }

    public function confirm(Request $request)/*Método para guardar la reserva en la BBDD*/
    {   
        /*Se crea un objeto de la clase Reservas y se le van asignando los datos del formulario*/
        $reserve = new Reservas();
        $objcustomer = new Clientes();
        $objroom = new Habitaciones();
        $customer = $request->request->get('inputcustomerid');
        $objcustomer = $this->getDoctrine()->getRepository(Clientes::class)->findOneBy(['email'=>$customer]);
       
        $room = $request->request->get('inputroomid');
        $objroom = $this->getDoctrine()->getRepository(Habitaciones::class)->findOneBy(['id'=>$room]);
        
        $from = $request->request->get('inputfrom');
        $fromurl = $from;
        $fromdatapicker = $this->dateFormatDataPicker($from);
        $from = \DateTime::createFromFormat('Y-m-d', $from);
        
        $to = $request->request->get('inputto');
        $tourl = $to;
        $todatapicker = $this->dateFormatDataPicker($to);
        $to = \DateTime::createFromFormat('Y-m-d', $to);
        
        $adults = $request->request->get('inputadults');
        if(empty($adults)){
            $adults = 0;
        }
        $children = $request->request->get('inputchildren');
        if(empty($children)){
            $children = 0;
        }
        $pets = $request->request->get('inputpets');
        if(empty($pets)){
            $pets = 0;
        }
        $days = $request->request->get('days');
        $destination = $request->request->get('destination');
        $typehosting = $request->request->get('typehosting');

        $dbprice = $objroom->getPrecio();
        $price = $dbprice * $days;
        
        $reserve->setIdcliente($objcustomer);
        $reserve->setIdhabitacion($objroom);
        $reserve->setFechainicio($from);
        $reserve->setFechafin($to);
        $reserve->setAdultos($adults);
        $reserve->setInfantiles($children);
        $reserve->setMascotas($pets);
        $reserve->setPrecio($price);
        $reserve->setFechacreacion(new \DateTime);
        $reserve->setActivo(1);
        /*Se guarda la reserva en la BBDD*/
        $reserve = $this->getDoctrine()->getRepository(Reservas::class)->Save($reserve);
        
        return $this->render('reservas/reservas.html.twig', [
            'reserves' => $reserve,
            'room' => $objroom,
            'from' => $fromurl,
            'fromdatapicker' => $fromdatapicker,
            'to' => $tourl,
            'todatapicker' => $todatapicker,
            'adults' => $adults,
            'children' => $children,
            'pets' => $pets,
            'days' => $days,
            'dbprice' => $dbprice,
            'destination' => $destination,
            'typehosting' => $typehosting,
        ]);
    }

    /*Métodos para cambiar el formato de las fechas*/
    public function dateFormat($date)
    {
        $objdate = new DateTime();
        $objdate = \DateTime::createFromFormat('m/d/Y', $date);
		$formateddate = date_format($objdate, 'd/m/Y');
        
        return $formateddate;
    }

    public function dateFormatDataPicker($date)
    {
        $objdate = new DateTime();
        $objdate = \DateTime::createFromFormat('Y-m-d', $date);
		$formateddate = date_format($objdate, 'd/m/Y');
        
        return $formateddate;
    }
}
