<?php

namespace ContainerR7U861H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMultimediaControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\MultimediaController' shared autowired service.
     *
     * @return \App\Controller\MultimediaController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\MultimediaController'] = $instance = new \App\Controller\MultimediaController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\MultimediaController', $container));

        return $instance;
    }
}