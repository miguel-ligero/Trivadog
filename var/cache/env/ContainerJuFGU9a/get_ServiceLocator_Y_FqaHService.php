<?php

namespace ContainerJuFGU9a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y_FqaHService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.Y.FqaH_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Y.FqaH_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hospedaje' => ['privates', '.errored..service_locator.Y.FqaH_.App\\Entity\\Hospedaje', NULL, 'Cannot autowire service ".service_locator.Y.FqaH_": it references class "App\\Entity\\Hospedaje" but no such service exists.'],
        ], [
            'hospedaje' => 'App\\Entity\\Hospedaje',
        ]);
    }
}
