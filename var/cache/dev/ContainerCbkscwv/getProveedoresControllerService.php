<?php

namespace ContainerCbkscwv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProveedoresControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProveedoresController' shared autowired service.
     *
     * @return \App\Controller\ProveedoresController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProveedoresController.php';

        $container->services['App\\Controller\\ProveedoresController'] = $instance = new \App\Controller\ProveedoresController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ProveedoresController', $container));

        return $instance;
    }
}
