<?php

namespace Container1zW0fg1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMultimediaControllerService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the public 'App\Controller\MultimediaController' shared autowired service.
     *
     * @return \App\Controller\MultimediaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MultimediaController.php';

        $container->services['App\\Controller\\MultimediaController'] = $instance = new \App\Controller\MultimediaController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\MultimediaController', $container));

        return $instance;
    }
}
