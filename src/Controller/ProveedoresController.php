<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use App\Security\AutentificadorAuthenticator;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Component\Validator\Constraints\DateTime;
use App\Entity\Clientes;
use App\Entity\Habitaciones;
use App\Entity\Hospedaje;
use App\Entity\Perfil;
use App\Entity\Reservas;
use App\Entity\Tipohospedaje;
use App\Entity\Geoname;
use App\Entity\Autocomplete;


class ProveedoresController extends AbstractController
{
    
    public function index()
    {
        $querystatus = false;
        $geocomunidades = $this->getDoctrine()->getRepository(Geoname::class)->getComunidades();
        $createedit = "new";

        return $this->render('proveedores/formregistroproveedor.html.twig', [
            'querystatus' => $querystatus,
            'geocomunidades' => $geocomunidades,
            'createedit' => $createedit,
        ]);
    }

    public function checkEmail($email)/*Método para comprobar si ya existe el email en la BBDD al registrarse un proveedor.
    Se llama a través de una petición AJAX*/
    {
        /*Se busca el email en la BBDD. Si no existe se devuelve null, y si existe se devulve el email en un json*/
        $email = $this->getDoctrine()->getRepository(Clientes::class)->findOneByEmail($email);
        
        if ($email == null) {
            return null;
        }
        $serializer = $this->get('serializer');
        $data = $serializer->serialize($email, 'json');
        $response = new Response($data, 200,[
            "Content-Type" => "application/json"
        ]);
         
        return $response;
    }

    public function createEdit($id)/*Método para cargar el formulario para crear o editar un proveedor*/
    {
        $provider = new Clientes();
        $geocomunidades = $this->getDoctrine()->getRepository(Geoname::class)->getComunidades();

        $getId = isset($id) && !empty($id);
        /*Se comprueba si existe(editar) o no(crear)*/
        if ($getId){
            $provider = $this->getDoctrine()->getRepository(Clientes::class)->find($id);
            $url = 'clientes/editarperfil.html.twig';
            $createedit = 'edit';
        }else{
            $url = 'proveedores/formregistroproveedor.html.twig';
            $createedit = 'new';
        }
        
        $querystatus = "";
        return $this->render($url,[
            'customer' => $provider,
            'querystatus' => $querystatus,
            'geocomunidades' => $geocomunidades,
            'createedit' => $createedit,
        ]);
    }

    public function registerProvider(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, AutentificadorAuthenticator $authenticator)
    /*Método para guardar un proveedor*/
    {
        /*Se crea un objeto proveedor*/
        $arrayerror = [];
        $provider = new Clientes();
        $provider->setFechacreacion(new \DateTime);
        $perfil = new Perfil();
        $perfil = $this->getDoctrine()->getRepository(Perfil::class)->findOneBy(['nombre'=>'ROLE_PROVIDER']);
        $provider->setIdperfil($perfil);
        $provider->setActivo(1);
        /*Se comprueba si existe o no*/
        $id = $request->request->get('inputid');
        $existId = isset($id) && !empty($id);
        $oldemail = "";
        $createedit = "";
        if ($existId){
            /*Si existe se recupera de la BBDD y se almacena en el objeto proveedor para su posterior modificación*/
            $createedit = 'edit';
            $provider = $this->getDoctrine()->getRepository(Clientes::class)->find($id);
            $oldemail = $provider->getEmail();
        }
        /*Se recuperan los datos del formulario y se validan con el método MessageValidate(). Este 
        devuelve el valor corregido y un array con los errores*/
        $name = $request->request->get('inputname');
        $resp = $this->MessageValidate("nombre" , $name,'', $arrayerror);
        $name = $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
        
        /*Se comprueba si existe el email en la BBDD*/
        $email = $request->request->get('inputemail');
        if ($oldemail != $email){
            if (!$existId){
                $existemail = $this->checkEmail($email);
            }else{
                $existemail = null;
            }
            
            if ($existemail != null){
                $arrayerror["email"] = "El email " . $email . " ya existe.";
            }else {
                $resp = $this->MessageValidate("email" , $email,'email', $arrayerror);
                $email = $resp->getValue();
                $arrayerror = $resp->getArrayresponse();
            }
        }
        
        $password = $request->request->get('inputpw');
        $resp = $this->MessageValidate("password" , $password,'', $arrayerror);
        $password = $resp->getValue();
        $provider->setPassword(
                    $passwordEncoder->encodePassword(
                        $provider,
                        $password
                    )
            );
        $arrayerror = $resp->getArrayresponse();
        
        $phone = $request->request->get('inputphone');
        $resp = $this->MessageValidate("telefono" , $phone,'telf', $arrayerror);
        $phone = $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
       
        $address = $request->request->get('inputaddress');
        $resp = $this->MessageValidate("direccion" , $address,'', $arrayerror);
        $address= $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
        
        /*Columnas en desuso en la BBDD*/
        $city = -1;
        $zipcode = -1;
        $province = -1;

        $autonomia = $request->request->get('autonomia'); 
        /*Se comprueba si en el request vienen autonomía, provincias y población(en el 
        caso de ser crear). Si no vienen, es que es editar, y se recuperan los datos de
        los inputhidden en los que se guardaron de la consulta del método createEditHost()*/
        if ($autonomia == ""){
            $autonomia = $request->request->get('inputhiddenadmin1');
            $provincias = $request->request->get('inputhiddenadmin2');
            $poblacion = $request->request->get('inputhiddenadmin3');
        }else{
            $provincias = $request->request->get('provincias');
            if ($provincias == ""){
                $poblacion = "";
                $provincias = "";
            }else{
                $poblacion = $request->request->get('poblacion');
                if ($poblacion == ""){
                    $poblacion = "";
                }
            }
        }

        $resp = $this->MessageValidate("autonomia", $autonomia,'', $arrayerror);
        $autonomia = $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
        
        $resp = $this->MessageValidate("provincias", $provincias,'', $arrayerror);
        $provincias = $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
        
        $resp = $this->MessageValidate("poblacion", $poblacion,'', $arrayerror);
        $poblacion = $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
        /*Se modifica el objeto con los nuevos datos*/
        $provider->setNombre($name);
        $provider->setEmail($email);
        $provider->setTelefono($phone);
        $provider->setDireccion($address);
        $provider->setPoblacion($city);
        $provider->setCodigopostal($zipcode);
        $provider->setProvincia($province);
        $provider->setAdmin1code($autonomia);
        $provider->setAdmin2code($provincias);
        $provider->setAdmin3code($poblacion);
        
        $querystatus = '';
        
        /*Se comprueba si hay algun error. Si no lo hay, se guarda el objeto en la BBDD*/
        if (count($arrayerror) == 0){
            try {
                $provider = $this->getDoctrine()->getRepository(Clientes::class)->Save($provider);
                if ($existId){
                    $querystatus = 'edit';
                    $createedit = 'edit';
                }else{
                    $querystatus = 'new';
                    $createedit = 'new';
                }
                
            } catch (\Exception $e) {
                $querystatus = 'error';
            }
        }else {
            /*Se comprueba si en el array de errores está el error de población para crear los modales con jquery 
            en la vista*/
            if (isset($arrayerror['poblacion'])){
                $querystatus = 'faltan';
            }else{
                $querystatus = "";
            }
        }
        
        return $this->render('proveedores/formregistroproveedor.html.twig', [
            'querystatus' => $querystatus,
            'arrayerror' => $resp->getArrayresponse(),
            'provider'=> $provider,
            'geocomunidades' => $autonomia,
            'createedit' => $createedit,
        ]);
    }

    public function MessageValidate($input, $val, $expr, $arrayerror)/*Método para validar los mensajes de 
    la validación de los inputs*/
    { 
        /*Se crea un objeto de la clase responsevalidateprovider, que almacenará el array con los mensajes de errores y 
        el valor de la variable a validar*/
        $resp = new ResponseValidateProvider();
        $value = "";
        /*Se llama al método validate para que valide los datos. Este método devuelve si la variable está vacía, 
        si no es texto, si no es número o el valor si está todo ok*/
        $validate = $this->validate($val, $expr);

        switch ($validate){
            case "empty":
                $msg =" es obligatorio";
                /*Se llama al método errorcontrol que prepara el mensaje del error y lo almacena en el array*/
                $arrayerror = $this->errorControl($validate, $input, $arrayerror, $msg);
                $value = $val;
            break;
            case "notstring":
                $msg = " solo admite texto";
                $arrayerror = $this->errorControl($validate, $input, $arrayerror, $msg);
                $value = $val;
            break;
            case "notphone":
                $msg = " solo admite números";
                $arrayerror = $this->errorControl($validate, $input, $arrayerror, $msg);
                $value = $val;
            break;
            case "notemail":
                $msg = " con formato no válido";
                $arrayerror = $this->errorControl($validate, $input, $arrayerror, $msg);
                $value = $val;
            break;
            case "notzip":
                $msg = " solo admite números";
                $arrayerror = $this->errorControl($validate, $input, $arrayerror, $msg);
                $value = $val;
            break;
            default:
                $value = $validate;
            break;
        }
        /*Se almacena en el objeto responsevalidateprovider el array de mensajes y el valor de la variable*/
        $resp->setArrayresponse($arrayerror);
        $resp->setValue($value);

        return $resp;
    }

    public function validate($input, $expr)/*Método para validar los datos de los inputs*/
    {
        $exprtext = "/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/";
        $exprtelf = "/^(6|7|8|9)[0-9]{8}$/";
        $expremail = "/^[a-zA-ZñÑ0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/";
        $exprezipcode = "/^[0-9]{5}$/";
                
        /*Se comprueba que las variables no estén vacías y que los datos son del tipo necesario y si coinciden
        con el formato requerido a través de la expresiones regulares. Se estandarizan con las funciones trim, addslashes, stripslashes, etc*/
        if (empty($input)){
            $input = "empty";
            return $input;
        }

        switch($expr){
            case "text":
                if (is_string($input)){
                    if ((preg_match($exprtext, $input)) == 1){
                        $input = trim($input);
                        $input = addslashes($input);
                        $input = stripslashes($input);
                        return $input;
                    }else{
                        $input = "notstring";
                        return $input;
                    }
                }else {
                    $input = "notstring";
                   return $input;
                }
            break;
            case "telf":
                if (is_numeric($input)){
                    if ((preg_match($exprtelf, $input)) == 1){
                        $input = trim($input);
                        $input = addslashes($input);
                        $input = stripslashes($input);
                        return $input;
                    }else {
                        $input = "notphone";
                        return $input;
                    }
                }else {
                    $input = "notphone";
                    return $input;
                }
            break;
            case "email":
                if ((preg_match($expremail, $input)) == 1){
                    $input = trim($input);
                    return $input;
                }else {
                    $input = "notemail";
                    return $input;
                }
            break;
            case "zip":
                if (is_numeric($input)){
                    if ((preg_match($exprezipcode, $input)) == 1){
                        $input = trim($input);
                        return $input;
                    }else {
                        $input = "notzip";
                        return $input;
                    }
                }else {
                    $input = "notzip";
                    return $input;
                }
            break;
            default:
                return $input;
        }
    }

    public function errorControl($errorname, $inputname, $arrayerror, $msg)/*Método para gestionar el array asociativo
    de los errores*/
    {
        $arrayerror[$inputname] = ucfirst($inputname . $msg);
       
        return $arrayerror; 
    }

    public function providerAccount(Request $request, $errorhost="")/*Método para cargar todos los hospedajes y las 
    habitaciones de un proveedor*/
    {
        /*Se comprueba que el proveedor esté logueado. Si no lo está se le redirige a la página de login*/
        $user = $this->getUser();
        if ($user == null){
            return $this->redirectToRoute('app_login');
        }
        $idproveedor = $user->getId();
        
        $prev = "";
        $next = "";
        $pagestotal = "";
        $page = $request->query->get('page');
        /*Se obtienen todos los alojamientos del proveedor*/
        $hostrepo = $this->getDoctrine()->getRepository(Hospedaje::class)->findBy(['idproveedor' => $idproveedor]);
        
        $roomrepo = $this->getDoctrine()->getRepository(Clientes::class);
        
        $limit = "";
        /*Se obtienen todas las habitaciones del proveedor y se cuenta cuantos registros hay para crear la paginación*/
        $rowstotal = count($roomrepo->findByRoomByProvider($idproveedor, $limit));
        /*Si hay más de 5 registros, se crea la paginación*/
        if ($rowstotal > 5){
            $pagesize = 5;
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
            $querystatus = "";
        }else{
            if ($errorhost == 1){
                $querystatus = "error";
            }else if ($errorhost == 2){
                $querystatus = "error2";
            }else{
                $querystatus = "";
            }
        }
        /*Se obtienen las imagenes del proveedor que sean necesarias*/
        $roomrepo = $roomrepo->findByRoomByProvider($idproveedor, $limit);
        
        return $this->render('proveedores/cuentaproveedor.html.twig', [
            'room' => $roomrepo, 
            'host' => $hostrepo,
            'prev' => $prev,
            'page' => $page,
            'next' => $next,
            'pagestotal' => $pagestotal,
            'providerid' => $idproveedor,
            'querystatus' => $querystatus,
        ]);
    }

    public function providerReserves(Request $request)/*Método para cargar las reservas de las habitaciones 
    de un proveedor*/
    {   
        $user = $this->getUser();
        $providerid = $user->getId();
        $prev = "";
        $next = "";
        $pagestotal = "";
        $errorhost = "";
        $page = $request->query->get('page');
        $reservesrepo = $this->getDoctrine()->getRepository(Reservas::class);
        /*Se obtienen todos los hospedajes del proveedor*/
        $hostrepo = $this->getDoctrine()->getRepository(Hospedaje::class)->findBy(['idproveedor' => $providerid]);
        $room = "";
        $limit = "";
        /*Se obtienen todas las reservas del proveedor y se cuentan cuantos registros hay, para crear la paginación*/
        $rowstotal = count($reservesrepo->findbyprovider($providerid, $limit, $room));

        if ($rowstotal > 5){
            $pagesize = 5;
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
            $querystatus = "";
        }else{
            if ($errorhost == 1){
                $querystatus = "error";
            }else{
                $querystatus = "";
            }
        }
        /*Se obtienen las reservas del proveedor que sean necesarias*/
        $reserves = $reservesrepo->findbyprovider($providerid, $limit, $room);

        return $this->render('proveedores/reservasproveedores.html.twig',[
            'reserves' => $reserves,
            'providerid' => $providerid,
            'host' => $hostrepo,
            'prev' => $prev,
            'page' => $page,
            'next' => $next,
            'pagestotal' => $pagestotal,
            'querystatus' => $querystatus,
        ]);
    }

    public function editReserve(Request $request, $reserveid)/*Método para editar una reserva*/ 
    {   
        $user = $this->getUser();
        $providerid = $user->getId();
        $limit = "";
        $page = $request->query->get('page');
        $roomid = $request->query->get('roomid');
        /*Se obtiene el objeto de la habitación para obtener el id del proveedor*/
        $roomobj = $this->getDoctrine()->getRepository(Habitaciones::class)->findBy(['id' => $roomid]);
        $hostproviderid = $roomobj[0]->getIdhospedaje()->getIdproveedor()->getId();
        /*Se comprueba que la habitación pertenece a este proveedor*/
        if ($hostproviderid != $providerid){
            $response = $this->redirectToRoute('reservasProveedor');
            return $response;
        }
        /*Se construye parte del where de la consulta sql para reutilizar la función findbyprovider(), que se 
        puede utilizar para consultar todas las reservas de un proveedor (sin $room), o todas las reservas de 
        un proveedor y una habitación en concreto (con $room)*/
        $room = 'AND ha.id = ' . $roomid;
        /*Se obtienen todos los hospedajes del proveedor para construir el menu desplegable*/
        $hostrepo = $this->getDoctrine()->getRepository(Hospedaje::class)->findBy(['idproveedor' => $providerid]);
        /*Se obtiene el objeto de la reserva que se va a editar*/
        $reserverepo = $this->getDoctrine()->getRepository(Reservas::class)->find($reserveid);
        /*Se obtienen todas las reservas de esta habitación para mostrar la tabla con el histórico de reservas*/
        $roomrepo = $this->getDoctrine()->getRepository(Reservas::class)->findbyprovider($providerid, $limit, $room);
        
        return $this->render('proveedores/editarreservaproveedores.html.twig',[
            'reserve' => $reserverepo,
            'page' => $page,
            'providerid' => $providerid,
            'host' => $hostrepo,
            'room' => $roomrepo,
        ]);
    }

    public function createReserves($roomid)/*Método para cargar el formulario para crear una reserva*/
    {   
        $user = $this->getUser();
        $providerid = $user->getId();
        /*Se obtiene el hospedaje del proveedor logueado*/
        $hostrepo = $this->getDoctrine()->getRepository(Hospedaje::class)->findBy(['idproveedor' => $providerid]);
        /*Se obtiene la habitación a la que se le va a crear la reserva*/
        $roomobj = $this->getDoctrine()->getRepository(Habitaciones::class)->findBy(['id' => $roomid]);
        
        $hostproviderid = $roomobj[0]->getIdhospedaje()->getIdproveedor()->getId();
        if ($hostproviderid != $providerid){
            $response = $this->redirectToRoute('reservasProveedor');
            return $response;
        }
        
        return $this->render('proveedores/crearreservaproveedores.html.twig',[
            'providerid' => $providerid,
            'host' => $hostrepo,
            'room' => $roomobj,
        ]);
    }


    public function saveReserve(Request $request)/*Método para guardar la reserva*/
    {
        $reserve = new Reservas();
        $reserveid = $request->request->get('reserveid');
        /*Se comprueba si es editar o crear */
        $existId = isset($reserveid) && !empty($reserveid);
        if ($existId){
            /*Si es editar, se recupera el objeto de la reserva*/
            $reserve = $this->getDoctrine()->getRepository(Reservas::class)->find($reserveid);
        }else{
            /*Si es crear, con la id de la habitación se obtiene un array de un elemento, objeto habitación, 
            y el objeto proveedor*/
            $roomid = $request->request->get('roomid');
            $room = $this->getDoctrine()->getRepository(Habitaciones::class)->findBy(['id' => $roomid]);
            $roomobj = $room[0];
            
            $customerid = $request->request->get('providerid');
            $customer = $this->getDoctrine()->getRepository(Clientes::class)->findBy(['id' => $customerid]);
            $customerobj = $customer[0];
            /*Se modifica el objeto reserva con los datos recuperados de la base de datos, y los que se crean 
            de forma predeterminada*/
            $reserve->setIdhabitacion($roomobj);
            $reserve->setIdCliente($customerobj);
            $reserve->setFechacreacion(new \DateTime);
            $reserve->setActivo('1');
        }
        /*Se recuperan los datos del formulario*/
        $from = $request->request->get('inputfrom');
        $from = \DateTime::createFromFormat('d/m/Y', $from);
        
        $to = $request->request->get('inputto');
        $to = \DateTime::createFromFormat('d/m/Y', $to);

        $adults = $request->request->get('inputadults');
        $children = $request->request->get('inputchildren');
        $pets = $request->request->get('inputpets');
        $price = $request->request->get('inputprice');
        /*Se rellena el objeto reserva con los datos del formulario*/
        $reserve->setFechainicio($from);
        $reserve->setFechafin($to);
        $reserve->setAdultos($adults);
        $reserve->setInfantiles($children);
        $reserve->setMascotas($pets);
        $reserve->setPrecio($price);
        /*Se guarda la reserva en la BBDD*/
        $reserve = $this->getDoctrine()->getRepository(Reservas::class)->Save($reserve);

        return $this->redirectToRoute('reservasProveedor');
    }

    public function deleteReserve($reserveid, $roomid)
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
           /*  $errorhost = 1; */
            return $this->redirectToRoute('cuentaProveedor', array('idproveedor' => $providerid/* , 'errorhost' => $errorhost */));
        }

        try{
            /*Con el id de la reserva se obtiene el objeto reserve*/
            $reserve = $this->getDoctrine()->getRepository(Reservas::class)->find($reserveid);
            /*Ahora se puede eliminar la habitación*/
            $reserve =$this->getDoctrine()->getRepository(Reservas::class)->delete($reserve);
            
            $querystatus = 'delete';
            
        }catch (\Exception $e) {
            $querystatus = 'roomerror';
        }
        
        return $this->redirectToRoute('reservasProveedor');
    }
}

class ResponseValidateProvider {
    
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



