<?php

namespace ContainerR7U861H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPerfilRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PerfilRepository' shared autowired service.
     *
     * @return \App\Repository\PerfilRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PerfilRepository'] = new \App\Repository\PerfilRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}