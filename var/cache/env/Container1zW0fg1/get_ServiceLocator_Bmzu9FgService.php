<?php

namespace Container1zW0fg1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bmzu9FgService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.Bmzu9Fg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Bmzu9Fg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reserva' => ['privates', '.errored..service_locator.Bmzu9Fg.App\\Entity\\Reservas', NULL, 'Cannot autowire service ".service_locator.Bmzu9Fg": it references class "App\\Entity\\Reservas" but no such service exists.'],
        ], [
            'reserva' => 'App\\Entity\\Reservas',
        ]);
    }
}
