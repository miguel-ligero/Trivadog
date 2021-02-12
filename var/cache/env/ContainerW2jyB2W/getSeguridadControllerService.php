<?php

namespace ContainerW2jyB2W;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSeguridadControllerService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the public 'App\Controller\SeguridadController' shared autowired service.
     *
     * @return \App\Controller\SeguridadController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\SeguridadController.php';

        $container->services['App\\Controller\\SeguridadController'] = $instance = new \App\Controller\SeguridadController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\SeguridadController', $container));

        return $instance;
    }
}