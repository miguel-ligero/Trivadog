<?php

namespace ContainerS0pDk0i;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G68MGzRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G68MGzR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G68MGzR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'geonameRepository' => ['privates', 'App\\Repository\\GeonameRepository', 'getGeonameRepositoryService', true],
        ], [
            'geonameRepository' => 'App\\Repository\\GeonameRepository',
        ]);
    }
}
