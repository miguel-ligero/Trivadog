<?php

namespace App\Controller;

use App\Entity\Multimedia;
use App\Entity\Habitaciones;
use App\Form\MultimediaType;
use App\Repository\MultimediaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/multimedia")
 */
class MultimediaController extends AbstractController
{
    public function room($roomid)/*Método para cargar todas la imagenes de una habitación*/
    {   
        /*Se comprueba que la habitación pertenece a este proveedor*/
        $user = $this->getUser();
        $providerid = $user->getId();

        $roomobj = $this->getDoctrine()->getRepository(Habitaciones::class)->findBy(['id' => $roomid]);
        $hostproviderid = $roomobj[0]->getIdhospedaje()->getIdproveedor()->getId();
        
        if ($hostproviderid != $providerid){
            $errorhost = 1;
            return $this->redirectToRoute('cuentaProveedor', array('idproveedor' => $providerid, 'errorhost' => $errorhost));
        }
        /*Se forma la clausula where con el id de la habitación y que estén activas en la BBDD*/
        $where = "idHabitacion = ". $roomid . " AND activo = '1'";
        /*Se forma un objeto multimedia con todas las imagenes de esa habitación */
        $pictures = $this->getDoctrine()->getRepository(Multimedia::class)->getpictures($where);
        
        return $this->render('multimedia/habitacion.html.twig', [
            'pictures' => $pictures,
            'providerid' => $providerid,
            'room' => $roomid,
        ]);
    }

    public function savePicture(Request $request)/*Método para guardar una imagen*/
    {   
        $user = $this->getUser();
        $providerid = $user->getId();
        /*Se obtiene el id de la imagen*/
        $pictureid = $request->request->get('modalpictureid');
        /*Se obtiene el id de la habitación para crear la ruta de almacenamiento de la imagen en el servidor*/
        $roomid = $request->request->get('room');
        $path = "img/host/". $roomid . "/";
        /*Se obtiene el archivo de la imagen y se recupera el nombre original con la función getClientOriginalName()*/
        $uploadedfile = $request->files->get('file');
        $name = $uploadedfile->getClientOriginalName();
        
        $pictures = new Multimedia();
        /*Se comprueba si es nueva o editar*/
        $existId = isset($pictureid) && !empty($pictureid);
        if ($existId){ //Entra solo para editar
            /*Si es editar se obtiene el objeto de esa imagen, se elimina del servidor el archivo y se modifica el objeto con el 
            nombre de la nueva imagen*/
            $pictures = $this->getDoctrine()->getRepository(Multimedia::class)->find($pictureid);
            unlink('./img/host/' . $roomid . "/". $pictures->getNombrefichero($pictures));
            $pictures->setNombrefichero($name);
            
        }else{
            /*Si es nuevo, se obtiene el objeto de esa habitación, y se le añade al objeto de la imagen, junto con el nombre 
            de la imagen nueva*/
            $objroom = $this->getDoctrine()->getRepository(Habitaciones::class)->find($roomid);
            
            $pictures->setNombrefichero($name);
            $pictures->setIdhabitacion($objroom);
            /*Se comprueba si esa habitación tiene más imagenes, y si es así, se controla si tiene que ser la imagen principal o no*/
            $numpictures = Count($countpictures = $this->getDoctrine()->getRepository(Multimedia::class)->findBy(['idhabitacion' => $roomid]));
            /*Si solo hay 1, es la imagen que se carga por defecto al crear la habitación. Se le modifica la propiedad principal y activo a 0, y 
            al objeto de la nueva imagen se asigna como imagen principal*/
            if ($numpictures == 1){
                $countpictures[0]->setPrincipal(0);
                $countpictures[0]->setActivo(0);
                $pictures->setPrincipal(1);
            }else {
                $pictures->setPrincipal(0);
            }
              
            $pictures->setTipo("Imagen");
            $pictures->setFechacreacion(new \DateTime);
            $pictures->setActivo(1);
        }
        /*Se guarda el archivo nuevo en el servidor con la ruta creada anteriormente. Se guarda el objeto imagen en la BBDD, y se vuelven 
        a recuperar todas las imagenes de esa habitación para recargar la página*/
        $uploadedfile->move($path, $name);
        $pictures = $this->getDoctrine()->getRepository(Multimedia::class)->Save($pictures);
        $where = "idHabitacion = ". $roomid . " AND activo = '1'";
        $pictures = $this->getDoctrine()->getRepository(Multimedia::class)->getpictures($where);
        
        return $this->render('multimedia/habitacion.html.twig', [
            'pictures' => $pictures,
            'providerid' => $providerid,
            'room' => $roomid,
        ]);
    }

    public function changeMainImg(Request $request)/*Método para cambiar cual es la imagen principal, a través de una petición AJAX*/
    {
        /*Con el id de la habitación se obtienen un array con todos los objetos de las imagenes de la habitación*/
        $id = $request->request->get('id');
        $roomid = $request->request->get('idHabitacion');
        $image = $this->getDoctrine()->getRepository(Multimedia::class)->findBy(['idhabitacion' => $roomid]);
        /*Se recorre el array y se modifica la propiedad principal a false a todas las imagenes*/
        foreach ($image as $val) {
            $val->setPrincipal(false);
        }
        /*Con el id de la habitación y el id de la imagen se obtiene un array de 1 elemento con el objeto de la imagen que va a ser 
        la principal*/
        $mainimage = $this->getDoctrine()->getRepository(Multimedia::class)->findBy(['idhabitacion' => $roomid, 'id' => $id]);
        $mainimg = $mainimage[0];
        /*Se le modifica la propiedad principal y se guarda en la BBDD*/
        $mainimg->setPrincipal(true);
        $mainimg = $this->getDoctrine()->getRepository(Multimedia::class)->Save($mainimg);
        /*Se devuelve el json para que modifique el documento html con jquery*/
        return new JsonResponse(array('msg' =>'Imagen principal cambiada'));
    }

    public function deletePicture($pictureid, $roomid)/*Método para elimiar una imagen*/
    {
        $user = $this->getUser();
        $providerid = $user->getId();
        /*Se obtiene el objeto imagen y de este se obtienen las propiedades principal y nombrefichero*/
        $image = $this->getDoctrine()->getRepository(Multimedia::class)->find($pictureid);
        $ismain = $image->getPrincipal();
        $imgfile = $image->getNombrefichero();
        /*Se elimina la imagen del servidor y de la BBDD*/
        unlink('./img/host/' . $roomid . "/". $imgfile);
        $image = $this->getDoctrine()->getRepository(Multimedia::class)->delete($image);
        /*Se comprueba si la imagen eliminada era la principal. En caso afirmativo, se comprueba cuantas imagenes tiene esta habitación, 
        obteniendo un array con todos los objetos de las imagenes, y contándolas*/
        if ($ismain == 1){
            $numpictures = Count($pictures = $this->getDoctrine()->getRepository(Multimedia::class)->findBy(['idhabitacion' => $roomid]));
            /*Si hay más de una, se recorre el array, y por cada elemento se comprueba si la propiedad nombrefichero coincide con el 
            nombre de la imagen que se añade por defecto. En cuanto se encuentra la primera imagen que no sea la creada por defecto, se pone 
            como principal y se guarda este objeto en la BBDD, y se interrumpe el bucle for, para que no siga comprobando con el resto de imagenes*/
            if ($numpictures > 1){
                foreach ($pictures as $val) {
                    if ($val->getNombrefichero() != 'dog_boxer.ico'){
                        $val->setPrincipal(1);
                        $val = $this->getDoctrine()->getRepository(Multimedia::class)->save($val);
                    break;
                    }
                }
            }else{
                /*Si solo hay un elemento en el array, es la imagen creada por defecto. Se le modifican las propiedades principal y activo a 1, 
                y se guarda en la BBDD*/
                $pictures[0]->setPrincipal(1);
                $pictures[0]->setActivo(1);
                $pictures = $this->getDoctrine()->getRepository(Multimedia::class)->save($pictures[0]);
            }
        }
        /*Se vuelven a recuperar todas las imagenes de esa habitación para recargar la página*/
        $where = "idHabitacion = ". $roomid . " AND activo = '1'";
        $pictures = $this->getDoctrine()->getRepository(Multimedia::class)->getpictures($where);

        return $this->render('multimedia/habitacion.html.twig', [
            'pictures' => $pictures,
            'providerid' => $providerid,
            'room' => $roomid,
        ]);
    }
}
