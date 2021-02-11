<?php

namespace App\Controller;

use App\Entity\Hospedaje;
use App\Entity\Tipohospedaje;
use App\Entity\Clientes;
use App\Entity\Geoname;
use App\Entity\Autocomplete;
use App\Form\HospedajeType;
use App\Repository\HospedajeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/hospedaje")
 */
class HospedajeController extends AbstractController
{
    
    public function index(HospedajeRepository $hospedajeRepository): Response
    {
        
        return $this->render('hospedaje/index.html.twig', [
            'hospedajes' => $hospedajeRepository->findAll(),
        ]);
    }

    
    public function show(Hospedaje $hospedaje): Response
    {   
        return $this->render('hospedaje/show.html.twig', [
            'hospedaje' => $hospedaje,
        ]);
    }

    
    public function edit(Request $request, Hospedaje $hospedaje): Response
    {
        $form = $this->createForm(HospedajeType::class, $hospedaje);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('hospedaje_index');
        }

        return $this->render('hospedaje/edit.html.twig', [
            'hospedaje' => $hospedaje,
            'form' => $form->createView(),
        ]);
    }

    
    public function delete(Request $request, Hospedaje $hospedaje): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hospedaje->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($hospedaje);
            $entityManager->flush();
        }

        return $this->redirectToRoute('hospedaje_index');
    }

    public function createEditHost(Request $request, $hostid=0)/*Método para cargar el formulario
    de creación de un nuevo hospedaje*/
    {
        /*Se comprueba que el usuario esté logueado*/
        $user = $this->getUser();
        if ($user == null){
            return $this->redirectToRoute('app_login');
        }
        $providerid = $user->getId();
        //variable de control para recargar los inputs del formulario
        $edit = false;
        $querystatus = "";
        /*Se carga el select de las comunidades*/
        $geocomunidades = $this->getDoctrine()->getRepository(Geoname::class)->getComunidades();
        /*Se carga el select de los tipos de hospedaje*/
        $objhostype = $this->getDoctrine()->getRepository(Tipohospedaje::class)->findAll();

        $objhost = new Hospedaje();
        /*Se comprueba si tiene id para saber si es editar o crear*/
        $getId = isset($hostid) && !empty($hostid);
        if ($getId){
            /*Si es editar se obtienen los datos del hospedaje y se pasan al formulario para su edición*/
            $objhost = $this->getDoctrine()->getRepository(Hospedaje::class)->find($hostid);
            /*Se verifica que el hospedaje pertenece a ese proveedor*/
            if ($objhost->getIdproveedor()->getId() == $providerid){
                $edit = true;
            }else{
                $errorhost = 2;
                $response = $this->redirectToRoute('cuentaProveedor', array('idproveedor' => $providerid, 'errorhost' => $errorhost));
                return $response;
            }
        }
        
        return $this->render('hospedaje/formulariohospedaje.html.twig',[
            'host' => $objhost,
            'querystatus' => $querystatus,
            'edit' => $edit,
            'providerid' => $providerid,
            'hosttype' => $objhostype,
            'geocomunidades' => $geocomunidades,
          
        ]);
    }

    public function registerHost(Request $request)/*Método para guardar el objeto hospedaje*/
    {
        $host = new Hospedaje();
        $arrayerror = [];
        $edit = false;
       
        $hostid = $request->request->get('inputid');
        /*Se recuperan los datos del formulario y se validan con el método MessageValidate(). Este 
        devuelve el valor corregido y un array con los errores*/
        $name = $request->request->get('inputname');
        $resp = $this->MessageValidate("nombre" , $name,'', $arrayerror);
        $name = $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
        
        $user = $this->getUser();
        $providerid = $user->getId();
        
        $hosttype = $request->request->get('inputhosttype');
        $resp = $this->MessageValidate("tipo hospedaje" , $hosttype,'', $arrayerror);
        $hosttype = $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
        
        $description = $request->request->get('inputdescription');
        $resp = $this->MessageValidate("descripcion" , $description,'', $arrayerror);
        $description = $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
        
        $email = $request->request->get('inputemail');
        $resp = $this->MessageValidate("email" , $email,'email', $arrayerror);
        $email = $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
        
        $phone = $request->request->get('inputphone');
        $resp = $this->MessageValidate("telefono" , $phone,'telf', $arrayerror);
        $phone = $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
        
        $address = $request->request->get('inputaddress');
        $resp = $this->MessageValidate("direccion" , $address,'', $arrayerror);
        $address = $resp->getValue();
        $arrayerror = $resp->getArrayresponse();
        
        $city = -1; //Campo no utilizado en la BBDD
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
        
        /*Se obtiene el objeto de la entidad Tipohospedaje para guardarlo en el hospedaje nuevo*/
        $hosttypeobj = new Tipohospedaje();
        $hosttypeobj = $this->getDoctrine()->getRepository(Tipohospedaje::class)->find($hosttype);
        
        /*Se obtiene el objeto de la entidad Cliente para guardarlo en el hospedaje nuevo*/
        $providerobj = new Clientes();
        $providerobj = $this->getDoctrine()->getRepository(Clientes::class)->find($providerid);
        
        $existId = isset($hostid) && !empty($hostid);
        if ($existId){
            /*Si existe el id, es editar, por lo que se trae el hospedaje de la BBDD y se forma el 
            objeto hospedaje y el objeto autocomplete, para modificarlo con los datos introducidos
            en el formulario*/
            $host = $this->getDoctrine()->getRepository(Hospedaje::class)->find($hostid);
            $autocompleteold = $this->getDoctrine()->getRepository(Autocomplete::class)->findOneBy(['idhospedaje' => $hostid]);
            $edit = true;
            $querystatus = 'edit';
        }else{
            $host->setFechacreacion(new \DateTime);
            $host->setActivo(1);
            $querystatus = 'new';
        }
        /*Se modifica el objeto con los nuevos datos*/
        $host->setNombre($name);
        $host->setDescripcion($description);
        $host->setDireccion($address);
        $host->setCiudad($city);
        $host->setTelefono($phone);
        $host->setEmail($email);
        $host->setAdmin1code($autonomia);
        $host->setAdmin2code($provincias);
        $host->setAdmin3code($poblacion);
        $host->setIdproveedor($providerobj);
        $host->SetIdtipohospedaje($hosttypeobj);
        /*Se comprueba si hay algun error. Si no lo hay, se guarda el objeto en la BBDD*/
        if (count($arrayerror) == 0){
            try {
                $host = $this->getDoctrine()->getRepository(Hospedaje::class)->save($host);
                $hostid = $host->getId();
                /*Se comprueba si ya existía el autocomplete de este hospedaje. Si existía, 
                se coge el objeto de la BBDD, se modifica y se guarda el objeto modificado 
                (método editHost()). Después se borra el antiguo (método delete()). Si no existía,
                se guarda el objeto recien creado (método insertHost())*/
                if (!empty($autocompleteold)){
                    $geonameidold = $autocompleteold->getId();
                    $geonameedit = $this->getDoctrine()->getRepository(Autocomplete::class)->editHost($hostid);
                    $geonameidold = $this->getDoctrine()->getRepository(Autocomplete::class)->delete($geonameidold);
                }else{
                    $geoname = $this->getDoctrine()->getRepository(Autocomplete::class)->insertHost($hostid);
                }
                
            } catch (\Exception $e) {
                $querystatus = 'error';
            }

        }else {
            /*Si hay algún error, se vuelve a cargar el select de tipo hospedaje, y se comprueba si en
            el array de errores está el error de población para crear los modales con jquery en la vista*/
            $hosttypeobj = $this->getDoctrine()->getRepository(Tipohospedaje::class)->findAll();
            if (isset($arrayerror['poblacion'])){
                $querystatus = 'faltan';
            }else{
                $querystatus = "";
            }
        }

        return $this->render('hospedaje/formulariohospedaje.html.twig', [
            'querystatus' => $querystatus,
            'arrayerror' => $resp->getArrayresponse(),
            'host'=> $host,
            'hostid' => $hostid,
            'hosttype' => $hosttypeobj,
            'providerid' => $providerid,
            'geocomunidades' => $autonomia,
            'edit' => $edit,
        ]);
    }

    public function MessageValidate($input, $val, $expr, $arrayerror)/*Método para validar los mensajes de 
    la validación de los inputs*/    
    { 
        /*Se crea un objeto de la clase responsevalidatehost, que almacenará el array con los mensajes de errores y 
        el valor de la variable a validar*/
        $resp = new ResponseValidateHost();
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
            case "notnum":
                $msg = " solo admite números";
                $arrayerror = $this->errorControl($validate, $input, $arrayerror, $msg);
                $value = $val;
            break;
            case "notemail":
                $msg = " con formato no válido";
                $arrayerror = $this->errorControl($validate, $input, $arrayerror, $msg);
                $value = $val;
            break;
             case "notphone":
                $msg = " con formato no válido";
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
        //$exprtext = "/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/";
        $exprtelf = "/^(6|7|8|9)[0-9]{8}$/";
        $expremail = "/^[a-zA-ZñÑ0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/";
        //$exprezipcode = "/^[0-9]{5}$/";
    
        /*Se comprueba que las variables no estén vacías y que los datos son del tipo necesario y si coinciden
        con el formato requerido a través de la expresiones regulares*/
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

    public function errorControl($errorname, $inputname, $arrayerror, $msg)/*Método para gestionar el array asociativo
    de los errores*/
    {
        $arrayerror[$inputname] = ucfirst($inputname . $msg);
       
        return $arrayerror; 
    }
}

class ResponseValidateHost {
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