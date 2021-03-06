<?php

namespace ContainerR7U861H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReservasRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ReservasRepository' shared autowired service.
     *
     * @return \App\Repository\ReservasRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ReservasRepository'] = new \App\Repository\ReservasRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
