<?php

namespace ContainerYSqT0SV;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F2hCTsaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.F2hCTsa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.F2hCTsa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'perfilRepository' => ['privates', 'App\\Repository\\PerfilRepository', 'getPerfilRepositoryService', true],
        ], [
            'perfilRepository' => 'App\\Repository\\PerfilRepository',
        ]);
    }
}
