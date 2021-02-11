<?php

namespace ContainerR7U861H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Uoss5_JService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.uoss5.j' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uoss5.j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hospedajeRepository' => ['privates', 'App\\Repository\\HospedajeRepository', 'getHospedajeRepositoryService', true],
        ], [
            'hospedajeRepository' => 'App\\Repository\\HospedajeRepository',
        ]);
    }
}
