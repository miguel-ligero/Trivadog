<?php

namespace App\Controller;

use App\Entity\Servicioshabitaciones;
use App\Entity\Servicios;
use App\Entity\Habitaciones;
use App\Form\ServicioshabitacionesType;
use App\Repository\ServicioshabitacionesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/servicioshabitaciones")
 */
class ServicioshabitacionesController extends AbstractController
{
    public function services($roomid)/*Método para cargar el formulario de crear o editar los servicios de cada habitación*/
    {   
        $user = $this->getUser();
        $providerid = $user->getId();
        /*Se obtiene el objeto de la habitación*/
        $roomobj = $this->getDoctrine()->getRepository(Habitaciones::class)->findBy(['id' => $roomid]);
        $hostproviderid = $roomobj[0]->getIdhospedaje()->getIdproveedor()->getId();
        /*Control de acceso del proveedor*/
        if ($hostproviderid != $providerid){
            $response = $this->redirectToRoute('editarHabitacion', array('roomid' => $roomid, 'page' => 1));
            return $response;
        }

        //$roomservice = new Servicioshabitaciones();
        /*Se obtienen todos los servicios para el formulario*/
        $service = $this->getDoctrine()->getRepository(Servicios::class)->findAll();
        /*Se obtienen los servicios de esta habitación*/
        $roomservice = $this->getDoctrine()->getRepository(Servicioshabitaciones::class)->findBy(['idhabitacion' => $roomid]);
        
        $querystatus = "";
        return $this->render('servicios/formularioservicios.html.twig', [
            'providerid' => $providerid,
            'roomid' => $roomid,
            'roomservice' => $roomservice,
            'service' => $service,
            'querystatus' => $querystatus,
        ]);
    }

    public function registerservice(Request $request)/*Método para guardar los servicios de una habitación*/
    {
        /*Se obtiene el array con los servicios seleccionados en el formulario*/
        $checkarray = $request->request->get('checkarray');
        $roomid = $request->request->get('roomid');
        $user = $this->getUser();
        $providerid = $user->getId();
        /*Se obtiene el objeto de la habitación*/
        $room = $this->getDoctrine()->getRepository(Habitaciones::class)->find($roomid);
        /*Se eliminan todos los servicios de la habitación de la BBDD*/
        $deleted = $this->getDoctrine()->getRepository(Servicioshabitaciones::class)->deleterows($roomid);
        /*Se crea un entity manager para ir almacenando todos los registros nuevos antes de guardarlos todos juntos en la BBDD*/
        $em = $this->getDoctrine()->getManager();
        if (!empty($checkarray)){
            /*Para cada elemento del array de servicios se crea un objeto de la clase servicioshabitaciones y se persiste en el entity manager*/
            foreach($checkarray as $val){
                $roomservice = new Servicioshabitaciones();
                $roomservice->setIdhabitacion($room);
                $service = new Servicios();
                $service = $this->getDoctrine()->getRepository(Servicios::class)->find($val);
                $roomservice->setIdservicio($service);
                $roomservice->setFechaCreacion(new \DateTime());
                $roomservice->setActivo(1);
                $em->persist($roomservice);
            }
        }
        /*Una vez creados todos los objetos, se guardan de una sola vez en la BBDD*/
        $reporoomservice = $this->getDoctrine()->getRepository(ServiciosHabitaciones::class)->Save($em);
        /*Se obtienen todos los servicios y los servicios de esta habitación para recargar el formulario*/
        $service = $this->getDoctrine()->getRepository(Servicios::class)->findAll();
        $roomservice = $this->getDoctrine()->getRepository(Servicioshabitaciones::class)->findBy(['idhabitacion' => $roomid]);
        $querystatus = "ok";
        
        return $this->render('servicios/formularioservicios.html.twig', [
            'providerid' => $providerid,
            'roomid' => $roomid,
            'service' => $service,
            'roomservice' => $roomservice,
            'querystatus' => $querystatus,
        ]);
    }
}
