<?php

namespace Container1zW0fg1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeonameControllerService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the public 'App\Controller\GeonameController' shared autowired service.
     *
     * @return \App\Controller\GeonameController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/GeonameController.php';

        $container->services['App\\Controller\\GeonameController'] = $instance = new \App\Controller\GeonameController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\GeonameController', $container));

        return $instance;
    }
}
