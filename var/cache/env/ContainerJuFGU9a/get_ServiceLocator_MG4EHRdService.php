<?php

namespace ContainerJuFGU9a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MG4EHRdService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.mG4EHRd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mG4EHRd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tipohospedajeRepository' => ['privates', 'App\\Repository\\TipohospedajeRepository', 'getTipohospedajeRepositoryService', true],
        ], [
            'tipohospedajeRepository' => 'App\\Repository\\TipohospedajeRepository',
        ]);
    }
}
