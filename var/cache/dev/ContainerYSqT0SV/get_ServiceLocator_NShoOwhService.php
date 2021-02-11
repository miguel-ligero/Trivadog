<?php

namespace ContainerYSqT0SV;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NShoOwhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NShoOwh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NShoOwh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservasRepository' => ['privates', 'App\\Repository\\ReservasRepository', 'getReservasRepositoryService', true],
        ], [
            'reservasRepository' => 'App\\Repository\\ReservasRepository',
        ]);
    }
}
