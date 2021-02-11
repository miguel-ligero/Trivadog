<?php

namespace App\Controller;

use App\Entity\Comentarioshospedaje;
use App\Entity\Habitaciones;
use App\Entity\Clientes;
use App\Form\ComentarioshospedajeType;
use App\Repository\ComentarioshospedajeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * @Route("/comentarioshospedaje")
 */
class ComentarioshospedajeController extends AbstractController
{
    
    public function index(ComentarioshospedajeRepository $comentarioshospedajeRepository): Response
    {
        return $this->render('comentarioshospedaje/index.html.twig', [
            'comentarioshospedajes' => $comentarioshospedajeRepository->findAll(),
        ]);
    }

    
    public function new(Request $request): Response
    {
        $comentarioshospedaje = new Comentarioshospedaje();
        $form = $this->createForm(ComentarioshospedajeType::class, $comentarioshospedaje);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comentarioshospedaje);
            $entityManager->flush();

            return $this->redirectToRoute('comentarioshospedaje_index');
        }

        return $this->render('comentarioshospedaje/new.html.twig', [
            'comentarioshospedaje' => $comentarioshospedaje,
            'form' => $form->createView(),
        ]);
    }

    
    public function show(Comentarioshospedaje $comentarioshospedaje): Response
    {
        return $this->render('comentarioshospedaje/show.html.twig', [
            'comentarioshospedaje' => $comentarioshospedaje,
        ]);
    }

    
    public function edit(Request $request, Comentarioshospedaje $comentarioshospedaje): Response
    {
        $form = $this->createForm(ComentarioshospedajeType::class, $comentarioshospedaje);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('comentarioshospedaje_index');
        }

        return $this->render('comentarioshospedaje/edit.html.twig', [
            'comentarioshospedaje' => $comentarioshospedaje,
            'form' => $form->createView(),
        ]);
    }

    
    public function delete(Request $request, Comentarioshospedaje $comentarioshospedaje): Response
    {
        if ($this->isCsrfTokenValid('delete'.$comentarioshospedaje->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($comentarioshospedaje);
            $entityManager->flush();
        }

        return $this->redirectToRoute('comentarioshospedaje_index');
    }

    public function insertComment(Request $request)/*Método para insertar comentarios y valoraciones */
    {
        
        $comment = new Comentarioshospedaje();
        $roomid  = $request->request->get('roomid');
        /*Se obtiene el número de comentarios de esa habitación para calcular la valoración media*/
        $room = $this->getDoctrine()->getRepository(Habitaciones::class)->find($roomid);
        $numcomment = $room->getNumcomentarios();
        /*Se le suma el nuevo comentario y se actualiza el objeto habitación*/
        $numcomment = $numcomment + 1;
        $room->setNumcomentarios($numcomment);
        
        $customerid = $request->request->get('customerid');
        $customer = $this->getDoctrine()->getRepository(Clientes::class)->find($customerid);

        $textcomment = $request->request->get('comment-textarea');
        /*Se recupera la valoración del formulario y se le pasa al método average() para calcular la media*/
        $rating = $request->request->get('rating-input');
        $avrating = $this->average($roomid, $rating, 'valoracion');
        $room->setMediavaloracion($avrating);

        $petsrating = $request->request->get('rating-pets-input');
        $avpetsrating = $this->average($roomid, $petsrating, 'valoracionmascotas');
        $room->setMediavaloracionmascotas($avpetsrating);

        $comment->setFechacreacion(new \DateTime);
        $comment->setActivo(1);
        $comment->setIdhabitacion($room);
        $comment->setIdcliente($customer);
        $comment->setComentario($textcomment);
        $comment->setValoracion($rating);
        $comment->setValoracionmascotas($petsrating);

        $commentrepo = $this->getDoctrine()->getRepository(Comentarioshospedaje::class)->save($comment);
        $room = $this->getDoctrine()->getRepository(Habitaciones::class)->save($room);
        /*Se recupera la dirección de la página de donde se venía y se vuelve a redirigir hacía ella*/
        $referer = $request->headers->get('referer'); 
        
        return new RedirectResponse($referer);
         
    }

    public function average($roomid, $valrating, $typerating)/*Método para calcular la media de las valoraciones*/
    {
        /*Se obtienen todos los comentarios de una habitación*/
        $commentrepo = $this->getDoctrine()->getRepository(Comentarioshospedaje::class)->findBy(['idhabitacion' => $roomid]);
        $cant = 0;
        $sum = 0;
        /*Se recorre el array de comentarios obteniendo la valoracion y sumando las cantidades. A la vez se lleva un
        contador para realizar la media*/
        switch ($typerating){
            case 'valoracion':
                foreach ($commentrepo as $val) {
                    $aux = $val->getValoracion();
                    if (isset($aux) && $aux != 0){
                        $sum = $sum + $aux;
                        $cant = $cant + 1;
                    }
                }
            break;
            case 'valoracionmascotas':
                foreach ($commentrepo as $val) {
                    $aux = $val->getValoracionmascotas();
                    if (isset($aux) && $aux != 0){
                        $sum = $sum + $aux;
                        $cant = $cant + 1;
                    }
                }
            break;
        }
        /*Se le añade el valor nuevo y se hace la media*/
        $sum = $sum + $valrating;
        $cant = $cant + 1;
        $average = $sum / $cant;
        
        return $average;

    }
}
