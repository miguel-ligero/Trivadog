<?php

namespace ContainerJuFGU9a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitacionesControllerService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the public 'App\Controller\HabitacionesController' shared autowired service.
     *
     * @return \App\Controller\HabitacionesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HabitacionesController.php';

        $container->services['App\\Controller\\HabitacionesController'] = $instance = new \App\Controller\HabitacionesController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\HabitacionesController', $container));

        return $instance;
    }
}
