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
use App\Entity\Clientes;
use App\Entity\Perfil;
use App\Entity\Reservas;
use App\Entity\Tipohospedaje;
use App\Entity\Geoname;
use App\Entity\Autocomplete;


class RegistrousuarioController extends AbstractController
{
    public function form()
    {   
        $querystatus = false;
        $geocomunidades = $this->getDoctrine()->getRepository(Geoname::class)->getComunidades();

        return $this->render('registrousuario/index.html.twig', [
            'querystatus' => $querystatus,
            'geocomunidades' => $geocomunidades,
        ]);
    }

    public function checkEmail($email)/*Método para comprobar si existe el email a través de una petición AJAX*/
    {
        
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

    public function createEdit($id)/*Método para cargar el formulario de crear o editar usuario*/
    {
        $user = $this->getUser()->getId();
        if ($id != $user){
            return $this->redirectToRoute('editarUsuario', array('id' => $user));
        }

        $customer = new Clientes();
        $getId = isset($id) && !empty($id);
        if ($getId){
            $customer = $this->getDoctrine()->getRepository(Clientes::class)->find($id);
            $url = 'clientes/editarperfil.html.twig';
            $createedit = 'edit';
        }else{
            $url = 'registrousuario/index.html.twig';
            $createedit = 'new';
        }
        $geocomunidades = $this->getDoctrine()->getRepository(Geoname::class)->getComunidades();
        $querystatus = "";

        return $this->render($url,[
            'customer' => $customer,
            'querystatus' => $querystatus,
            'geocomunidades' => $geocomunidades,
            'createedit' => $createedit,
        ]);
    }

    public function registerUser(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, AutentificadorAuthenticator $authenticator)
    {   /*Método para guardar un usuario en la BBDD*/
        $arrayerror = [];
        /*Se crea un objeto de la clase clientes*/
        $customer = new Clientes();
        $customer->setFechacreacion(new \DateTime);
        $perfil = new Perfil();
        $perfil = $this->getDoctrine()->getRepository(Perfil::class)->findOneBy(['nombre'=>'ROLE_USER']);
        $customer->setIdperfil($perfil);
        $customer->setActivo(1);
        /*Se comprueba si existe o es nuevo*/
        $id = $request->request->get('inputid');
        $existId = isset($id) && !empty($id);
        $createedit = "";
        $oldpassword = "";
        $oldprofile = 2;
        $oldemail = "";
        if ($existId){
            $createedit = 'edit';
            $customer = $this->getDoctrine()->getRepository(Clientes::class)->find($id);
            $oldpassword = $customer->getPassword();
            $oldprofile = $customer->getIdperfil()->getId();
            $oldemail = $customer->getEmail();
        }
        /*Se recuperan los datos introducidos en el formulario y se van validando. Se comprueba si es usuario 
        o proveedor para validar el nombre con una expresión regular o no, y para recuperar el apellido del 
        formulario o no*/
        $name = $request->request->get('inputname');
        if ($oldprofile == 2){
            $varvalidation = 'text';
        }else{
            $varvalidation = '';
        }
        $resp = $this->MessageValidate("nombre" , $name, $varvalidation, $arrayerror);
        $name = $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
        
        $surname = $request->request->get('inputsurname');
        if ($oldprofile == 2){
            $resp = $this->MessageValidate("apellidos" , $surname,'text', $arrayerror);
            $surname = $resp->getValue();
            $arrayerror = $resp->getArrayresponse();
        }

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
        if ($password != $oldpassword){
            $resp = $this->MessageValidate("password" , $password,'', $arrayerror);
            $password = $resp->getValue();
            $customer->setPassword(
                        $passwordEncoder->encodePassword(
                            $customer,
                            $password
                        )
                );
            $arrayerror = $resp->getArrayresponse();
        }
                
        $phone = $request->request->get('inputphone');
        $resp = $this->MessageValidate("telefono" , $phone,'telf', $arrayerror);
        $phone = $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
        
        $address = $request->request->get('inputaddress');
        $resp = $this->MessageValidate("direccion" , $address,'', $arrayerror);
        $address= $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
        /*Variables en desuso*/
        $city = -1;
        $zipcode = -1;
        $province = -1;

        $autonomia = $request->request->get('autonomia'); 
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
        
        $customer->setNombre($name);
        $customer->setApellidos($surname);
        $customer->setEmail($email);
        $customer->setTelefono($phone);
        $customer->setDireccion($address);
        $customer->setPoblacion($city);
        $customer->setCodigopostal($zipcode);
        $customer->setProvincia($province);
        $customer->setAdmin1code($autonomia);
        $customer->setAdmin2code($provincias);
        $customer->setAdmin3code($poblacion);
        
        $querystatus = '';
        $provider = '';
        if ($createedit == "edit"){
            $url = 'clientes/editarperfil.html.twig';
        }else{
            $url = 'registrousuario/index.html.twig';
        }
       
        /*Se comprueban si hay errores. Si no hay, se guarda en la BBDD. Si hay, se redirige al formulario de registro*/
        if (count($arrayerror) == 0){
            try {
                $customer = $this->getDoctrine()->getRepository(Clientes::class)->Save($customer);
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
            if (isset($arrayerror['poblacion'])){
                $querystatus = 'faltan';
            }else{
                $querystatus = "";
            }
        }
        
        return $this->render($url, [
            'querystatus' => $querystatus,
            'arrayerror' => $resp->getArrayresponse(),
            'customer'=> $customer,
            'geocomunidades' => $autonomia,
            'createedit' => $createedit,
            'provider' => $customer,
        ]);
    }

    public function MessageValidate($input, $val, $expr, $arrayerror)/*Método para validar los mensajes de 
    la validación de los inputs*/
    { 
        /*Se crea un objeto de la clase responsevalidateprovider, que almacenará el array con los mensajes de errores y 
        el valor de la variable a validar*/
        $resp = new ResponseValidate();
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

    

    public function customerFilter(Request $request, $id, $hostingtypeselect)/*Método para filtrar las 
    reservas de un cliente por tipo de hospedaje*/
    {
        $user = $this->getUser()->getId();
        if ($id != $user){
            return $this->redirectToRoute('cuentaCliente', array('id' => $user));
        }
        /*Para crear el menu*/
        $hostingtype = $this->getDoctrine()->getRepository(Tipohospedaje::class)->findAll();

        $reserverepo = $this->getDoctrine()->getRepository(Reservas::class);
        $page = $request->query->get('page');
        $limit = "";
        $pagestotal = "";
        $next = "";
        $prev = "";
        $sqlhostingtype = "";
                
        if (!empty($hostingtypeselect)){
            /*Se construye la parte variable del where de la consulta sql*/
            $sqlhostingtype = 'AND ho.idTipoHospedaje= ' . $hostingtypeselect;
        }
        /*Se cuentan cuantos registros devuelve la consulta para crear la paginación*/
        $rowstotal = count($reserverepo->findbyfilter($id, $sqlhostingtype, $limit));
        /*Si hay más de 4, se crea, si no, no*/
        if ($rowstotal > 4){
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
        }
        /*Se recuperan todas las reservas del ususario con el tipo de hospedaje seleccionado*/
        $reserves = $this->getDoctrine()->getRepository(Reservas::class)->findbyfilter($id, $sqlhostingtype, $limit);
        /*Si no hay ninguna reserva, se muestra un modal con un mensaje*/
        $resultmodal = 'hide';
        if (count($reserves) == 0){
            $resultmodal = 'show';
        }
        
        return $this->render('clientes/cuentacliente.html.twig', [
            'reserves' => $reserves,
            'customerid' => $id,
            'hostingtype' => $hostingtype,
            'typehosting' => $hostingtypeselect,
            'pagestotal' => $pagestotal,
            'next' => $next,
            'prev' => $prev,
            'page' => $page,
            'resultmodal' => $resultmodal,
        ]);
    }
}

class ResponseValidate {
    
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

