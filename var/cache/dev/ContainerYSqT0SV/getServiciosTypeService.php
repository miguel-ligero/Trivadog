<?php

namespace ContainerYSqT0SV;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiciosTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ServiciosType' shared autowired service.
     *
     * @return \App\Form\ServiciosType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\ServiciosType.php';

        return $container->privates['App\\Form\\ServiciosType'] = new \App\Form\ServiciosType();
    }
}
