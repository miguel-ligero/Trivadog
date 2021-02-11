<?php

namespace ContainerR7U861H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommonPreConfiguratorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPreConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPreConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CommonPreConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPreConfigurator(($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')));
    }
}
