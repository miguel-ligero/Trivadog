<?php

namespace Container1zW0fg1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicioshabitacionesTypeService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private 'App\Form\ServicioshabitacionesType' shared autowired service.
     *
     * @return \App\Form\ServicioshabitacionesType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ServicioshabitacionesType.php';

        return $container->privates['App\\Form\\ServicioshabitacionesType'] = new \App\Form\ServicioshabitacionesType();
    }
}
