<?php

namespace ContainerR7U861H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EqnmxvTService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.eqnmxvT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eqnmxvT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'habitacione' => ['privates', '.errored..service_locator.eqnmxvT.App\\Entity\\Habitaciones', NULL, 'Cannot autowire service ".service_locator.eqnmxvT": it references class "App\\Entity\\Habitaciones" but no such service exists.'],
        ], [
            'habitacione' => 'App\\Entity\\Habitaciones',
        ]);
    }
}
