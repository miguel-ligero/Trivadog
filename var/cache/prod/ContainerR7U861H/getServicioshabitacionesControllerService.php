<?php

namespace ContainerR7U861H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicioshabitacionesControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ServicioshabitacionesController' shared autowired service.
     *
     * @return \App\Controller\ServicioshabitacionesController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ServicioshabitacionesController'] = $instance = new \App\Controller\ServicioshabitacionesController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ServicioshabitacionesController', $container));

        return $instance;
    }
}
