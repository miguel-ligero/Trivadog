<?php

namespace ContainerS0pDk0i;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getComentarioshospedajeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ComentarioshospedajeController' shared autowired service.
     *
     * @return \App\Controller\ComentarioshospedajeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\ComentarioshospedajeController.php';

        $container->services['App\\Controller\\ComentarioshospedajeController'] = $instance = new \App\Controller\ComentarioshospedajeController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ComentarioshospedajeController', $container));

        return $instance;
    }
}
