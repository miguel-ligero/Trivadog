<?php

namespace ContainerJuFGU9a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReservasControllerService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the public 'App\Controller\ReservasController' shared autowired service.
     *
     * @return \App\Controller\ReservasController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ReservasController.php';

        $container->services['App\\Controller\\ReservasController'] = $instance = new \App\Controller\ReservasController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ReservasController', $container));

        return $instance;
    }
}
