<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Habitaciones;
use App\Entity\Multimedia;
Use App\Entity\Tipohospedaje;

class HomeController extends AbstractController
{
    public function index()
    {   
        $repoRoom = $this->getDoctrine()->getRepository(Habitaciones::class);
        $roombestrating = $repoRoom->getFavorites("mediaValoracion");
        $roombestrating = $this->picture($roombestrating);
        $hostingtype = $this->getDoctrine()->getRepository(Tipohospedaje::class)->findAll();
        
        return $this->render('home/index.html.twig', [
            'room' => $roombestrating,
            'hostingtype' => $hostingtype,
        ]);
    }

    public function picture($list)
    {   
        $array = [];
        $room = new Habitaciones();
        $mult = new Multimedia();
        $mult->setIdhabitacion($room);

        foreach($list as $val){
            
            $idselected = $val["id"];
            $objmult = $this->getDoctrine()->getRepository(Multimedia::class)->findBy(array('idhabitacion' => $idselected, 'principal' => 1));
            $array[] = $objmult;
        }
        return $array;
    }

    public function back()
    {   
        $var = 10;
        return $this->render('home/back.html.twig', [
            'var' => $var,
        ]);
    }
}
