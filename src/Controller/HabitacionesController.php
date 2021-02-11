<?php

namespace App\Controller;

use App\Entity\Habitaciones;
use App\Entity\Hospedaje;
use App\Entity\Tipohospedaje;
use App\Entity\Multimedia;
use App\Entity\Reservas;
Use App\Entity\Clientes;
use App\Entity\Comentarioshospedaje;
use App\Entity\Servicioshabitaciones;
use App\Entity\Autocomplete;
use App\Form\HabitacionesType;
use App\Repository\HabitacionesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @Route("/habitaciones")
 */
class HabitacionesController extends AbstractController
{
    
    public function index(HabitacionesRepository $habitacionesRepository): Response
    {
        return $this->render('habitaciones/index.html.twig', [
            'habitaciones' => $habitacionesRepository->findAll(),
        ]);
    }

    public function show(Habitaciones $habitacione): Response
    {
        return $this->render('habitaciones/show.html.twig', [
            'habitacione' => $habitacione,
        ]);
    }

    public function edit(Request $request, Habitaciones $habitacione): Response
    {
        $form = $this->createForm(HabitacionesType::class, $habitacione);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('habitaciones_index');
        }

        return $this->render('habitaciones/edit.html.twig', [
            'habitacione' => $habitacione,
            'form' => $form->createView(),
        ]);
    }

    public function search(Request $request, $page)/*Método para buscar los hoteles con habitaciones disponibles*/
    {
        $roomrepo = $this->getDoctrine()->getRepository(Habitaciones::class);
        $hostingtype = $this->getDoctrine()->getRepository(Tipohospedaje::class)->findAll();
        
        $adults = "";
        $children = "";
        $pets = "";
        /*Si no viene el parámetro en el request no se ha llamado al método desde la busqueda principal, viene redirigido 
        de otra página. Entonces, los parámetros de la busqueda vienen por url en el query*/
        if ($request->request->get("destination") == null){
            $destination = $request->query->get("destination");
            $typehosting = $request->query->get("typehosting");
            $from = $request->query->get("from");
            $fromdatapicker = $this->dateFormatDataPicker($from);
            $to = $request->query->get("to");
            $todatapicker = $this->dateFormatDataPicker($to);
            $adults = $request->query->get("adults");
            $children = $request->query->get("children");
            $pets = $request->query->get("pets");
        }else{ 
            $destination = $request->request->get("destination");
            $typehosting = $request->request->get("typehosting");
            $from = $request->request->get("inputfrom");
            $fromdatapicker = $from;
            $from = $this->dateFormat($from);
            $to = $request->request->get("inputto");
            $todatapicker = $to;
            $to = $this->dateFormat($to);
            $adults = $request->request->get("adults");
            $children = $request->request->get("children");
            $pets = $request->request->get("pets");
        }

        if (empty($adults)) $adults = 0;
        if (empty($children)) $children = 0;
        if (empty($pets)) $pets = 0;
        
        /*Se obtiene el objeto del autocomplete y se comprueba cuantos parámetros de dirección se han pasado para la busqueda.
        Se construye la sección de la consulta sql de la dirección*/
        $objautocomplete = $this->getDoctrine()->getRepository(Autocomplete::class)->findBy(['textobusqueda' => $destination]);
        $admin1code = $objautocomplete[0]->getAdmin1code();
        $destinationadmin = ' ho.admin1code = ' . "'" . $admin1code . "'" . ' ';
        $admin2code = $objautocomplete[0]->getAdmin2code();
        if ($admin2code != NULL){
            $destinationadmin = $destinationadmin . 'AND ho.admin2code = ' . "'" . $admin2code . "'" . ' ';
        }
        $admin3code = $objautocomplete[0]->getAdmin3code();
        if ($admin3code != NULL){
            $destinationadmin = $destinationadmin . 'AND ho.admin3code = ' . "'" . $admin3code ."'". ' ';
        }

        $limit = "";
        /*Se cuenta el número de registros que ha dado la consulta. Si el resultado es mayor que 0, se crea la paginación 
        y se ejecuta la consulta*/
        $rowstotal = count($roomselect = $roomrepo->getHost($limit, $destinationadmin, $typehosting, $from, $to, $adults, $children, $pets));
        
        if ($rowstotal > 0){
            $pagesize = 4;
            $pagestotal = ceil($rowstotal / $pagesize);
            
            if (isset($page)){
                if (!is_numeric($page)){
                    $page = 1;
                }
            } else {
                $page = 1;
            }

            $startfrom = ($page - 1) * $pagesize;
            $prev = 1;
            if ($page > 1){
                $prev = $page - 1;
            }

            $next = $page;
            if ($page < $pagestotal){
                $next = $next + 1;
            }
            
            $limit = 'LIMIT ' . $startfrom .', ' . $pagesize;
                            
            $hostselect = $roomrepo->getHost($limit, $destinationadmin, $typehosting, $from, $to, $adults, $children, $pets, $startfrom, $pagesize);
            $where="";
            /*Se obtiene el id de cada habitación para obtener las imagenes de la entidad Multimedia. Para ello se crea la sección del where de la 
            consulta sql*/
            foreach ($hostselect as $val){
                $item = 'idHabitacion=' . $val['idHabitacion'] . ' OR ';
                $where = $where . $item; 
            }
            
            $where = rtrim($where, " OR ");
            $where = "(" . $where . ") AND activo= 1";
            $imagenes = $this->getDoctrine()->getRepository(Multimedia::class)->getpictures($where);
            $modalmessage = false;
            $rendering = $this->render('habitaciones/resultadobusquedahotel.html.twig', [
                'host' => $hostselect,
                'hostingtype' => $hostingtype,
                'pagestotal' => $pagestotal,
                'next' => $next,
                'prev' => $prev,
                'page' => $page,
                'from' => $from,
                'to' => $to,
                'destination' => $destination,
                'adults' => $adults,
                'children' => $children,
                'pets' => $pets,
                'typehosting' => $typehosting,
                'fromdatapicker' => $fromdatapicker,
                'todatapicker' => $todatapicker,
                'imagenes' => $imagenes,
                'modalmessage' => $modalmessage,

            ]);
        }else{
            /*Si no hay ningún resultado, pasamos los parámetros para mostrar un modal con el mensaje adecuado*/
            $modalmessage = true;
            $rendering = $this->render('habitaciones/resultadobusqueda.html.twig', [
                'modalmessage' => $modalmessage,
                'hostingtype' => $hostingtype,
                'destination' => $destination,
                'adults' => $adults,
                'children' => $children,
                'pets' => $pets,
                'typehosting' => $typehosting,
                'fromdatapicker' => $fromdatapicker,
                'todatapicker' => $todatapicker,
            ]);
        }
        
        return $rendering;
    }

    public function resultRooms(Request $request, $page)/*Método para mostrar las habitaciones disponibles*/
    {
        $roomrepo = $this->getDoctrine()->getRepository(Habitaciones::class);
        $hostingtype = $this->getDoctrine()->getRepository(Tipohospedaje::class)->findAll();
        
        $destination = $request->query->get("destination");
        $typehosting = $request->query->get("typehosting");
        /*Se utilizan 2 variables con cada una de las fechas desde y hasta. Una con el formato para la lógica y otra con el formato para 
        mostrar en los inputs*/
        $from = $request->query->get("from");
        $fromdatapicker = $this->dateFormatDataPicker($from);
        
        $to = $request->query->get("to");
        $todatapicker = $this->dateFormatDataPicker($to);
        
        $adults = $request->query->get("adults");
        $children = $request->query->get("children");
        $pets = $request->query->get("pets");
        $host = $request->query->get("host");
           
        if (empty($adults)) $adults = 0;
        if (empty($children)) $children = 0;
        if (empty($pets)) $pets = 0;
        
        /*Se obtiene el objeto del autocomplete y se comprueba cuantos parámetros de dirección se han pasado para la busqueda.
        Se construye la sección de la consulta sql de la dirección*/
        $objautocomplete = $this->getDoctrine()->getRepository(Autocomplete::class)->findBy(['textobusqueda' => $destination]);
        $admin1code = $objautocomplete[0]->getAdmin1code();
        $destinationadmin = ' ho.admin1code = ' . "'" . $admin1code . "'" . ' ';
        $admin2code = $objautocomplete[0]->getAdmin2code();
        if ($admin2code != NULL){
            $destinationadmin = $destinationadmin . 'AND ho.admin2code = ' . "'" . $admin2code . "'" . ' ';
        }
        $admin3code = $objautocomplete[0]->getAdmin3code();
        if ($admin3code != NULL){
            $destinationadmin = $destinationadmin . 'AND ho.admin3code = ' . "'" . $admin3code ."'". ' ';
        }

        $limit = "";
        /*Se cuenta el número de registros que ha dado la consulta. Si el resultado es mayor que 0, se crea la paginación 
        y se ejecuta la consulta*/
        $rowstotal = count($roomselect = $roomrepo->getRooms($limit, $destinationadmin, $typehosting, $host, $from, $to, $adults, $children, $pets));
       
        if ($rowstotal != 0){
            $pagesize = 4;
            $pagestotal = ceil($rowstotal / $pagesize);
            
            if (isset($page)){
                if (!is_numeric($page)){
                    $page = 1;
                }
            } else {
                $page = 1;
            }

            $startfrom = ($page - 1) * $pagesize;
            $prev = 1;
            if ($page > 1){
                $prev = $page - 1;
            }

            $next = $page;
            if ($page < $pagestotal){
                $next = $next + 1;
            }
            
            $limit = 'LIMIT ' . $startfrom .', ' . $pagesize;
                            
            $roomselect = $roomrepo->getRooms($limit, $destinationadmin, $typehosting, $host, $from, $to, $adults, $children, $pets);
            $where="";
            /*Se obtiene el id de cada habitación para obtener las imagenes de la entidad Multimedia. Para ello se crea la sección del where de la 
            consulta sql*/
            foreach ($roomselect as $val){
                $item = 'idHabitacion=' . $val['idHabitacion'] . ' OR ';
                $where = $where . $item; 
            }
            
            $where = rtrim($where, " OR ");
            $where = "(" . $where . ") AND activo= 1";
            $imagenes = $this->getDoctrine()->getRepository(Multimedia::class)->getpictures($where);
            $modalmessage = false;
            $rendering = $this->render('habitaciones/resultadobusqueda.html.twig', [
                'host' => $host,
                'room' => $roomselect,
                'hostingtype' => $hostingtype,
                'pagestotal' => $pagestotal,
                'next' => $next,
                'prev' => $prev,
                'page' => $page,
                'from' => $from,
                'to' => $to,
                'destination' => $destination,
                'adults' => $adults,
                'children' => $children,
                'pets' => $pets,
                'typehosting' => $typehosting,
                'fromdatapicker' => $fromdatapicker,
                'todatapicker' => $todatapicker,
                'imagenes' => $imagenes,
                'modalmessage' => $modalmessage,

            ]);
        }else{
            /*Si no hay ningún resultado, pasamos los parámetros para mostrar un modal con el mensaje adecuado*/
            $modalmessage = true;
            $rendering = $this->render('habitaciones/resultadobusqueda.html.twig', [
                'modalmessage' => $modalmessage,
                'hostingtype' => $hostingtype,
                'destination' => $destination,
                'adults' => $adults,
                'children' => $children,
                'pets' => $pets,
                'typehosting' => $typehosting,
                'fromdatapicker' => $fromdatapicker,
                'todatapicker' => $todatapicker,
            ]);
        }
        
        return $rendering;
        
    }

    public function dateFormat($date)/*Método para convertir la fecha del input en un objeto date con el formato para la base de datos*/
    {
        $objdate = new DateTime();
        $objdate = \DateTime::createFromFormat('d/m/Y', $date);
		$formateddate = date_format($objdate, 'Y-m-d');
        
        return $formateddate;
    }

    public function dateFormatDataPicker($date)/*Método inverso al anterior*/
    {
        $objdate = new DateTime();
        $objdate = \DateTime::createFromFormat('Y-m-d', $date);
		$formateddate = date_format($objdate, 'd/m/Y');
        
        return $formateddate;
    }

    public function detail(Request $request, $idHabitacion)/*Método para mostrar los detalles de una habitación*/
    {
        $destination = $request->query->get("destination");
        $typehosting = $request->query->get("typehosting");
        $from = $request->query->get("from");
        $fromdatapicker = $from;
        $to = $request->query->get("to");
        $todatapicker = $to;
        $adults = $request->query->get("adults");
        $children = $request->query->get("children");
        $pets = $request->query->get("pets");
        $page = $request->query->get("page");
        $days = $request->query->get("days");

        $customeraccountid = $request->query->get("cuentacliente");
        /* Controlamos desde donde se ha llamado a detail, desde la home, desde cuentacliente o desde resultadobusqueda, para
        crear la url del botón volver y decidir si se muestra el botón reservar*/
        $linkcontrolaccount = empty($customeraccountid);
        $linkcontrolsearch = empty($destination);
        
        if ($linkcontrolaccount == true && $linkcontrolsearch == true){
            $linkcontrol = "home";
        }else if ($linkcontrolaccount == false && $linkcontrolsearch == true){
            $linkcontrol = "cuentacliente";
        }else {
            $linkcontrol = "busqueda";
        }
        
        $room = $this->getDoctrine()->getRepository(Habitaciones::class)->find($idHabitacion);
        $img = $this->getDoctrine()->getRepository(Multimedia::class)->findBy(array('idhabitacion'=> $idHabitacion, 'activo' => 1));
        $comment = $this->getDoctrine()->getRepository(Comentarioshospedaje::class)->findBy(array('idhabitacion'=> $idHabitacion));
        $roomservice = $this->getDoctrine()->getRepository(Servicioshabitaciones::class)->findBy(['idhabitacion'=> $idHabitacion]);

        return $this->render('habitaciones/detallealojamiento.html.twig', [
            'room' => $room,
            'img' => $img,
            'comment' => $comment,
            'from' => $from,
            'to' => $to,
            'destination' => $destination,
            'adults' => $adults,
            'children' => $children,
            'pets' => $pets,
            'typehosting' => $typehosting,
            'fromdatapicker' => $fromdatapicker,
            'todatapicker' => $todatapicker,
            'page' => $page,
            'days' => $days,
            'customeraccountid' => $customeraccountid,
            'roomservice' => $roomservice,
            'linkcontrol' => $linkcontrol,
        ]);
    }

    public function createEditRoom(Request $request, $page="", $roomid="")/*Método que carga del formulario para crear o editar una habitación*/
    {
        $arrayerror = [];
        $user = $this->getUser();
        if ($user == null){
            return $this->redirectToRoute('app_login');
        }
        $providerid = $user->getId();
        
        /*Se comprueba si el proveedor tiene al menos un alojamiento creado*/
        $hostid = $this->getDoctrine()->getRepository(Hospedaje::class)->findOneBy(['idproveedor'=>$providerid]);
        if (empty($hostid)){
            /*Si no tiene creado ninguno alojamiento, no puede crear la habitación*/
            $errorhost = 1;
            $response = $this->redirectToRoute('cuentaProveedor', array('idproveedor' => $providerid, 'errorhost' => $errorhost));
        }else{
            $room = new Habitaciones(); 
            $hostname = new Hospedaje(); 
            $edit = false;
            //Se comprueba si es crear o editar
            $getId = isset($roomid) && !empty($roomid);
            if ($getId){
                /*Si es editar, se cogen los datos de esa habitación y se pasan al formulario*/
                $room = $this->getDoctrine()->getRepository(Habitaciones::class)->find($roomid);
                $hostid = $room->getIdhospedaje();
                $hostname = $this->getDoctrine()->getRepository(Hospedaje::class)->findOneBy(['id'=>$hostid]);
                //Se comprueba que la habitación es de este proveedor
                if ($hostname->getIdproveedor()->getId() == $providerid){
                    $edit = true;
                }else{
                    $errorhost = 2;
                    $response = $this->redirectToRoute('cuentaProveedor', array('idproveedor' => $providerid, 'errorhost' => $errorhost));
                    return $response;
                }
            }else {
                /*Si no es editar, se cogen todos los hospedajes de este proveedor y se pasan al formulario*/
                $hostname = $this->getDoctrine()->getRepository(Hospedaje::class)->findBy(['idproveedor'=>$providerid]);
                $edit = false;
            }
            /*Se comprueba si hay errores en algun input. Si es así, se cogen los datos de los inputs que esten correctos y se 
            introducen en el objeto room y se vuelve a cargar el formulario*/
            $arrayerror = $request->query->get('arrayerror');
            if ($arrayerror != 0){
                $arraysize = count($arrayerror);
                if ($arraysize > 0){
                    $objroom = $request->query->get('objroom');
                    if ($objroom > 0){
                        foreach ($objroom as $key => $val){
                            $auxset = "set" . ucfirst($key);
                            $room->$auxset($val);
                        }
                    }
                }
            }
            
            $querystatus = $request->query->get('querystatus');
            $response = $this->render('habitaciones/formulariohabitacion.html.twig',[
                'room' => $room,
                'hostname' => $hostname, 
                'querystatus' => $querystatus,
                'edit' => $edit,
                'providerid' => $providerid,
                'page' => $page,
                'arrayerror' => $arrayerror,
            ]);
            
        }
        return $response;
    }

    public function registerRoom(Request $request)/*Método que recupera los datos del formulario y los guarda en la BBDD*/
    {
        $querystatus = '';
        $arrayroom = [];

        $user = $this->getUser();
        if ($user == null){
            return $this->redirectToRoute('app_login');
        }
        $providerid = $user->getId();

        $hostname = $request->request->get('inputhostid');
        $arrayerror = [];
        $hostid = $this->getDoctrine()->getRepository(Hospedaje::class)->findOneBy(['id'=>$hostname]);
        $hostproviderid = $hostid->getidproveedor($hostid)->getId();
        
        /*Se comprueba que el hospedaje es del proveedor que está registrando la habitación*/
        if ($hostproviderid != $providerid){
            $errorhost = 1;
            return $this->redirectToRoute('cuentaProveedor', array('idproveedor' => $providerid, 'errorhost' => $errorhost));
        }

        /*Se crea un objeto de la clase habitaciones y se le van introduciendo los datos recuperados del formulario tras haber 
        sido validados. Los errores se van almacenando en un array*/
        $room = new Habitaciones();
        $room->setFechacreacion(new \DateTime);
        $room->setActivo(1);

        /*Se comprueba si es nuevo o editar*/
        $idroom = $request->request->get('inputid');
        $existId = isset($idroom) && !empty($idroom);
        if ($existId){
            $room = $this->getDoctrine()->getRepository(Habitaciones::class)->find($idroom);
        }else{
            $idroom = "";
        }
        
        $name = $request->request->get('inputname');
        $resp = $this->MessageValidate("nombre" , $name,'', $arrayerror);
        $name = $resp->getValue();
        if (!empty($name)){
            $room->setNombre($name);
            $arrayroom['nombre'] = $name;
        }
        
        $arrayerror = $resp->getArrayresponse();
        
        $adults = $request->request->get('inputadults');
        $resp = $this->MessageValidate("numadultos" , $adults,'num', $arrayerror);
        $adults = $resp->getValue();
        if (!empty($adults)){
            $room->setNumadultos($adults);
            $arrayroom['numadultos'] = $adults;
        }
        $arrayerror = $resp->getArrayresponse();
        
        $children = $request->request->get('inputchildren');
        $resp = $this->MessageValidate("numinfantiles" , $children,'num', $arrayerror);
        $children= $resp->getValue();
        if (!empty($children)){
            $room->setNuminfantiles($children);
            $arrayroom['numinfantiles'] = $children;
        }
        $arrayerror = $resp->getArrayresponse();
        
        $pets = $request->request->get('inputpets');
        $resp = $this->MessageValidate("nummascotas" , $pets,'num', $arrayerror);
        $pets= $resp->getValue();
        if (!empty($pets)){
            $room->setNummascotas($pets);
            $arrayroom['nummascotas'] = $pets;
        }
        $arrayerror = $resp->getArrayresponse();
        
        $price = $request->request->get('inputprice');
        $resp = $this->MessageValidate("precio" , $price,'num', $arrayerror);
        $price= $resp->getValue();
        if (!empty($price)){
            $room->setPrecio($price);
            $arrayroom['precio'] = $price;
        }
        $arrayerror = $resp->getArrayresponse();
        
        $hostname = $hostid->getNombre();
        $resp = $this->MessageValidate("nombrehospedaje" , $hostname,'text', $arrayerror);
        $hostid ->setNombre($resp->getValue());
        if (!empty($hostid)){
            $room->setIdhospedaje($hostid);
        }
        $arrayerror = $resp->getArrayresponse();
        
        /*Se cuentan los errores que hay en el array, y si no hay ninguno, se completa el objeto y se almacena el nuevo registro en la BBDD*/
        if (count($arrayerror) == 0){
            try {
                $regroom = $this->getDoctrine()->getRepository(Habitaciones::class)->Save($room);
                $idroom = $regroom->getId();
                
                if ($existId){
                    $querystatus = 'edit';
                }else{
                    /*Si es nuevo se crea un objeto multimedia y se le carga una imagen por defecto*/
                    $querystatus = 'new';
                    $picture = new Multimedia();
                    $picture->setIdhabitacion($regroom);
                    $picture->setNombrefichero("dog_boxer.ico");
                    $picture->setTipo("Imagen");
                    $picture->setPrincipal(1);
                    $picture->setFechacreacion(new \DateTime);
                    $picture->setActivo(1);
                    $mult = $this->getDoctrine()->getRepository(Multimedia::class)->Save($picture);
                }
                
            } catch (\Exception $e) {
                $querystatus = 'error';
            }
        }
        
        $response = $this->redirectToRoute('editarHabitacion', array('roomid' => $idroom, 'providerid' => $hostproviderid, 'querystatus' => $querystatus, 'arrayerror' => $arrayerror, 'objroom' => $arrayroom));

        return $response;
    }


    public function MessageValidate($input, $val, $expr, $arrayerror)/*Método para validar los mensajes de la validación de los inputs*/
    { 
        /*Se crea un objeto de la clase responsevalidateroom, que almacenará el array con los mensajes de errores y 
        el valor de la variable a validar*/
        $resp = new ResponseValidateRoom();
        $value = "";
        /*Se llama al método validate para que valide los datos. Este método devuelve si la variable está vacía, si no es texto,
        si no es número o el valor si está todo ok*/
        $validate = $this->validate($val, $expr);

        switch ($validate){
            case "empty":
                $msg =" es obligatorio";
                /*Se llama al método errorcontrol que prepara el mensaje del error y lo almacena en el array*/
                $arrayerror = $this->errorControl($validate, $input, $arrayerror, $msg);
                $value = $val;
            break;
            case "text":
                $msg = " solo admite texto";
                $arrayerror = $this->errorControl($validate, $input, $arrayerror, $msg);
                $value = $val;
            break;
            case "num":
                $msg = " solo admite números";
                $arrayerror = $this->errorControl($validate, $input, $arrayerror, $msg);
                $value = $val;
            break;
            default:
                $value = $validate;
            break;
        }
        /*Se almacena en el objeto responsevalidateroom el array de mensajes y el valor de la variable*/
        $resp->setArrayresponse($arrayerror);
        $resp->setValue($value);
        
        return $resp;
    }

     public function validate($input, $expr)/*Método para validar los datos de los inputs*/
     {
        if (empty($input)){
            $input = "empty";
            return $input;
        }

        switch($expr){
            case "text":
                if (is_string($input)){
                    return $input;
                }else {
                    $input = "notstring";
                   return $input;
                }
            break;
            case "number":
                if (is_numeric($input)){
                    return $input;
                }else {
                    $input = "notnumber";
                    return $input;
                }
            break;
            default:
                return $input;
        }
    }

    public function errorControl($errorname, $inputname, $arrayerror, $msg)/*Método para gestionar el array asociativo de los errores*/
    {
        $arrayerror[$inputname] = ucfirst($inputname . $msg);
       
        return $arrayerror; 
    }

    public function deleteRoom($roomid, $page)/*Método para eliminar una habitación*/
    {
        $user = $this->getUser();
        if ($user == null){
            return $this->redirectToRoute('app_login');
        }
        $providerid = $user->getId();
        //Comprobar que la habitación es de este proveedor
        $roomobj = $this->getDoctrine()->getRepository(Habitaciones::class)->find($roomid);
        $hostproviderid = $roomobj->getIdhospedaje()->getIdproveedor()->getId();
        if ($hostproviderid != $providerid){
            $errorhost = 1;
            return $this->redirectToRoute('cuentaProveedor', array('idproveedor' => $providerid, 'errorhost' => $errorhost));
        }

        try{
            /*Con el id de la habitación se obtiene un array con las imagenes de esa habitación. Lo convertimos en un objeto y pasamos ese
            objeto al método delete de la clase multimedia para eliminar las imagenes antes de eliminar la habitación*/
            $multi = $this->getDoctrine()->getRepository(Multimedia::class)->findBy(array('idhabitacion' => $roomid));
            $objmulti = new Multimedia;
            $objmulti = (object) $multi[0];
            $multi = $this->getDoctrine()->getRepository(Multimedia::class)->delete($objmulti);
            /*Ahora se puede eliminar la habitación*/
            $room = $this->getDoctrine()->getRepository(Habitaciones::class)->find($roomid);
            $objroom = new Habitaciones;
            $objroom = (object) $room;
            $room = $this->getDoctrine()->getRepository(Habitaciones::class)->delete($objroom);
            
            $querystatus = 'delete';

        }catch (\Exception $e) {
            $querystatus = 'roomerror';
        }

        return $this->redirectToRoute('cuentaProveedor', array('idproveedor' => $providerid, 'querystatus' => $querystatus, 'page' => $page));
    }
}

class ResponseValidateRoom {
    /*Se utiliza esta clase para que el método messagevalidate pueda devolver dos valores*/
    private $arrayresponse = [];

    public function getArrayresponse(): Array
    {
        return $this->arrayresponse;
    }

    public function setArrayresponse(array $arrayresponse): self
    {
        $this->arrayresponse = $arrayresponse;

        return $this;
    }

    private $value = "";

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
