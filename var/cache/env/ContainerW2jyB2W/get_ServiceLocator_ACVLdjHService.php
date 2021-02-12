<?php

namespace ContainerW2jyB2W;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ACVLdjHService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.ACVLdjH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ACVLdjH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'servicio' => ['privates', '.errored..service_locator.ACVLdjH.App\\Entity\\Servicios', NULL, 'Cannot autowire service ".service_locator.ACVLdjH": it references class "App\\Entity\\Servicios" but no such service exists.'],
        ], [
            'servicio' => 'App\\Entity\\Servicios',
        ]);
    }
}