<?php

namespace ContainerCbkscwv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JR_CD6sService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JR.CD6s' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JR.CD6s'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ClientesController::delete' => ['privates', '.service_locator.srLf9iH', 'get_ServiceLocator_SrLf9iHService', true],
            'App\\Controller\\ClientesController::edit' => ['privates', '.service_locator.srLf9iH', 'get_ServiceLocator_SrLf9iHService', true],
            'App\\Controller\\ClientesController::index' => ['privates', '.service_locator.NAYm2rI', 'get_ServiceLocator_NAYm2rIService', true],
            'App\\Controller\\ClientesController::show' => ['privates', '.service_locator.srLf9iH', 'get_ServiceLocator_SrLf9iHService', true],
            'App\\Controller\\ComentarioshospedajeController::delete' => ['privates', '.service_locator.UHwoknX', 'get_ServiceLocator_UHwoknXService', true],
            'App\\Controller\\ComentarioshospedajeController::edit' => ['privates', '.service_locator.UHwoknX', 'get_ServiceLocator_UHwoknXService', true],
            'App\\Controller\\ComentarioshospedajeController::index' => ['privates', '.service_locator.gKAH1sY', 'get_ServiceLocator_GKAH1sYService', true],
            'App\\Controller\\ComentarioshospedajeController::show' => ['privates', '.service_locator.UHwoknX', 'get_ServiceLocator_UHwoknXService', true],
            'App\\Controller\\GeonameController::listComunidades' => ['privates', '.service_locator.G68MGzR', 'get_ServiceLocator_G68MGzRService', true],
            'App\\Controller\\GeonameController::listPoblacion' => ['privates', '.service_locator.G68MGzR', 'get_ServiceLocator_G68MGzRService', true],
            'App\\Controller\\GeonameController::listProvincias' => ['privates', '.service_locator.G68MGzR', 'get_ServiceLocator_G68MGzRService', true],
            'App\\Controller\\HabitacionesController::edit' => ['privates', '.service_locator.eqnmxvT', 'get_ServiceLocator_EqnmxvTService', true],
            'App\\Controller\\HabitacionesController::index' => ['privates', '.service_locator.dILx7bj', 'get_ServiceLocator_DILx7bjService', true],
            'App\\Controller\\HabitacionesController::show' => ['privates', '.service_locator.eqnmxvT', 'get_ServiceLocator_EqnmxvTService', true],
            'App\\Controller\\HospedajeController::delete' => ['privates', '.service_locator.Y.FqaH_', 'get_ServiceLocator_Y_FqaHService', true],
            'App\\Controller\\HospedajeController::edit' => ['privates', '.service_locator.Y.FqaH_', 'get_ServiceLocator_Y_FqaHService', true],
            'App\\Controller\\HospedajeController::index' => ['privates', '.service_locator.uoss5.j', 'get_ServiceLocator_Uoss5_JService', true],
            'App\\Controller\\HospedajeController::show' => ['privates', '.service_locator.Y.FqaH_', 'get_ServiceLocator_Y_FqaHService', true],
            'App\\Controller\\PerfilController::delete' => ['privates', '.service_locator.ZJ8.Xeu', 'get_ServiceLocator_ZJ8_XeuService', true],
            'App\\Controller\\PerfilController::edit' => ['privates', '.service_locator.ZJ8.Xeu', 'get_ServiceLocator_ZJ8_XeuService', true],
            'App\\Controller\\PerfilController::index' => ['privates', '.service_locator.F2hCTsa', 'get_ServiceLocator_F2hCTsaService', true],
            'App\\Controller\\PerfilController::show' => ['privates', '.service_locator.ZJ8.Xeu', 'get_ServiceLocator_ZJ8_XeuService', true],
            'App\\Controller\\ProveedoresController::registerProvider' => ['privates', '.service_locator.aZBFiOV', 'get_ServiceLocator_AZBFiOVService', true],
            'App\\Controller\\RegistrousuarioController::registerUser' => ['privates', '.service_locator.aZBFiOV', 'get_ServiceLocator_AZBFiOVService', true],
            'App\\Controller\\ReservasController::delete' => ['privates', '.service_locator.Bmzu9Fg', 'get_ServiceLocator_Bmzu9FgService', true],
            'App\\Controller\\ReservasController::edit' => ['privates', '.service_locator.Bmzu9Fg', 'get_ServiceLocator_Bmzu9FgService', true],
            'App\\Controller\\ReservasController::index' => ['privates', '.service_locator.NShoOwh', 'get_ServiceLocator_NShoOwhService', true],
            'App\\Controller\\ReservasController::show' => ['privates', '.service_locator.Bmzu9Fg', 'get_ServiceLocator_Bmzu9FgService', true],
            'App\\Controller\\SeguridadController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\ServiciosController::delete' => ['privates', '.service_locator.ACVLdjH', 'get_ServiceLocator_ACVLdjHService', true],
            'App\\Controller\\ServiciosController::edit' => ['privates', '.service_locator.ACVLdjH', 'get_ServiceLocator_ACVLdjHService', true],
            'App\\Controller\\ServiciosController::index' => ['privates', '.service_locator.tqZlqUD', 'get_ServiceLocator_TqZlqUDService', true],
            'App\\Controller\\ServiciosController::show' => ['privates', '.service_locator.ACVLdjH', 'get_ServiceLocator_ACVLdjHService', true],
            'App\\Controller\\TipohospedajeController::delete' => ['privates', '.service_locator.SO67mA5', 'get_ServiceLocator_SO67mA5Service', true],
            'App\\Controller\\TipohospedajeController::edit' => ['privates', '.service_locator.SO67mA5', 'get_ServiceLocator_SO67mA5Service', true],
            'App\\Controller\\TipohospedajeController::index' => ['privates', '.service_locator.mG4EHRd', 'get_ServiceLocator_MG4EHRdService', true],
            'App\\Controller\\TipohospedajeController::show' => ['privates', '.service_locator.SO67mA5', 'get_ServiceLocator_SO67mA5Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\ClientesController:delete' => ['privates', '.service_locator.srLf9iH', 'get_ServiceLocator_SrLf9iHService', true],
            'App\\Controller\\ClientesController:edit' => ['privates', '.service_locator.srLf9iH', 'get_ServiceLocator_SrLf9iHService', true],
            'App\\Controller\\ClientesController:index' => ['privates', '.service_locator.NAYm2rI', 'get_ServiceLocator_NAYm2rIService', true],
            'App\\Controller\\ClientesController:show' => ['privates', '.service_locator.srLf9iH', 'get_ServiceLocator_SrLf9iHService', true],
            'App\\Controller\\ComentarioshospedajeController:delete' => ['privates', '.service_locator.UHwoknX', 'get_ServiceLocator_UHwoknXService', true],
            'App\\Controller\\ComentarioshospedajeController:edit' => ['privates', '.service_locator.UHwoknX', 'get_ServiceLocator_UHwoknXService', true],
            'App\\Controller\\ComentarioshospedajeController:index' => ['privates', '.service_locator.gKAH1sY', 'get_ServiceLocator_GKAH1sYService', true],
            'App\\Controller\\ComentarioshospedajeController:show' => ['privates', '.service_locator.UHwoknX', 'get_ServiceLocator_UHwoknXService', true],
            'App\\Controller\\GeonameController:listComunidades' => ['privates', '.service_locator.G68MGzR', 'get_ServiceLocator_G68MGzRService', true],
            'App\\Controller\\GeonameController:listPoblacion' => ['privates', '.service_locator.G68MGzR', 'get_ServiceLocator_G68MGzRService', true],
            'App\\Controller\\GeonameController:listProvincias' => ['privates', '.service_locator.G68MGzR', 'get_ServiceLocator_G68MGzRService', true],
            'App\\Controller\\HabitacionesController:edit' => ['privates', '.service_locator.eqnmxvT', 'get_ServiceLocator_EqnmxvTService', true],
            'App\\Controller\\HabitacionesController:index' => ['privates', '.service_locator.dILx7bj', 'get_ServiceLocator_DILx7bjService', true],
            'App\\Controller\\HabitacionesController:show' => ['privates', '.service_locator.eqnmxvT', 'get_ServiceLocator_EqnmxvTService', true],
            'App\\Controller\\HospedajeController:delete' => ['privates', '.service_locator.Y.FqaH_', 'get_ServiceLocator_Y_FqaHService', true],
            'App\\Controller\\HospedajeController:edit' => ['privates', '.service_locator.Y.FqaH_', 'get_ServiceLocator_Y_FqaHService', true],
            'App\\Controller\\HospedajeController:index' => ['privates', '.service_locator.uoss5.j', 'get_ServiceLocator_Uoss5_JService', true],
            'App\\Controller\\HospedajeController:show' => ['privates', '.service_locator.Y.FqaH_', 'get_ServiceLocator_Y_FqaHService', true],
            'App\\Controller\\PerfilController:delete' => ['privates', '.service_locator.ZJ8.Xeu', 'get_ServiceLocator_ZJ8_XeuService', true],
            'App\\Controller\\PerfilController:edit' => ['privates', '.service_locator.ZJ8.Xeu', 'get_ServiceLocator_ZJ8_XeuService', true],
            'App\\Controller\\PerfilController:index' => ['privates', '.service_locator.F2hCTsa', 'get_ServiceLocator_F2hCTsaService', true],
            'App\\Controller\\PerfilController:show' => ['privates', '.service_locator.ZJ8.Xeu', 'get_ServiceLocator_ZJ8_XeuService', true],
            'App\\Controller\\ProveedoresController:registerProvider' => ['privates', '.service_locator.aZBFiOV', 'get_ServiceLocator_AZBFiOVService', true],
            'App\\Controller\\RegistrousuarioController:registerUser' => ['privates', '.service_locator.aZBFiOV', 'get_ServiceLocator_AZBFiOVService', true],
            'App\\Controller\\ReservasController:delete' => ['privates', '.service_locator.Bmzu9Fg', 'get_ServiceLocator_Bmzu9FgService', true],
            'App\\Controller\\ReservasController:edit' => ['privates', '.service_locator.Bmzu9Fg', 'get_ServiceLocator_Bmzu9FgService', true],
            'App\\Controller\\ReservasController:index' => ['privates', '.service_locator.NShoOwh', 'get_ServiceLocator_NShoOwhService', true],
            'App\\Controller\\ReservasController:show' => ['privates', '.service_locator.Bmzu9Fg', 'get_ServiceLocator_Bmzu9FgService', true],
            'App\\Controller\\SeguridadController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\ServiciosController:delete' => ['privates', '.service_locator.ACVLdjH', 'get_ServiceLocator_ACVLdjHService', true],
            'App\\Controller\\ServiciosController:edit' => ['privates', '.service_locator.ACVLdjH', 'get_ServiceLocator_ACVLdjHService', true],
            'App\\Controller\\ServiciosController:index' => ['privates', '.service_locator.tqZlqUD', 'get_ServiceLocator_TqZlqUDService', true],
            'App\\Controller\\ServiciosController:show' => ['privates', '.service_locator.ACVLdjH', 'get_ServiceLocator_ACVLdjHService', true],
            'App\\Controller\\TipohospedajeController:delete' => ['privates', '.service_locator.SO67mA5', 'get_ServiceLocator_SO67mA5Service', true],
            'App\\Controller\\TipohospedajeController:edit' => ['privates', '.service_locator.SO67mA5', 'get_ServiceLocator_SO67mA5Service', true],
            'App\\Controller\\TipohospedajeController:index' => ['privates', '.service_locator.mG4EHRd', 'get_ServiceLocator_MG4EHRdService', true],
            'App\\Controller\\TipohospedajeController:show' => ['privates', '.service_locator.SO67mA5', 'get_ServiceLocator_SO67mA5Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\ClientesController::delete' => '?',
            'App\\Controller\\ClientesController::edit' => '?',
            'App\\Controller\\ClientesController::index' => '?',
            'App\\Controller\\ClientesController::show' => '?',
            'App\\Controller\\ComentarioshospedajeController::delete' => '?',
            'App\\Controller\\ComentarioshospedajeController::edit' => '?',
            'App\\Controller\\ComentarioshospedajeController::index' => '?',
            'App\\Controller\\ComentarioshospedajeController::show' => '?',
            'App\\Controller\\GeonameController::listComunidades' => '?',
            'App\\Controller\\GeonameController::listPoblacion' => '?',
            'App\\Controller\\GeonameController::listProvincias' => '?',
            'App\\Controller\\HabitacionesController::edit' => '?',
            'App\\Controller\\HabitacionesController::index' => '?',
            'App\\Controller\\HabitacionesController::show' => '?',
            'App\\Controller\\HospedajeController::delete' => '?',
            'App\\Controller\\HospedajeController::edit' => '?',
            'App\\Controller\\HospedajeController::index' => '?',
            'App\\Controller\\HospedajeController::show' => '?',
            'App\\Controller\\PerfilController::delete' => '?',
            'App\\Controller\\PerfilController::edit' => '?',
            'App\\Controller\\PerfilController::index' => '?',
            'App\\Controller\\PerfilController::show' => '?',
            'App\\Controller\\ProveedoresController::registerProvider' => '?',
            'App\\Controller\\RegistrousuarioController::registerUser' => '?',
            'App\\Controller\\ReservasController::delete' => '?',
            'App\\Controller\\ReservasController::edit' => '?',
            'App\\Controller\\ReservasController::index' => '?',
            'App\\Controller\\ReservasController::show' => '?',
            'App\\Controller\\SeguridadController::login' => '?',
            'App\\Controller\\ServiciosController::delete' => '?',
            'App\\Controller\\ServiciosController::edit' => '?',
            'App\\Controller\\ServiciosController::index' => '?',
            'App\\Controller\\ServiciosController::show' => '?',
            'App\\Controller\\TipohospedajeController::delete' => '?',
            'App\\Controller\\TipohospedajeController::edit' => '?',
            'App\\Controller\\TipohospedajeController::index' => '?',
            'App\\Controller\\TipohospedajeController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ClientesController:delete' => '?',
            'App\\Controller\\ClientesController:edit' => '?',
            'App\\Controller\\ClientesController:index' => '?',
            'App\\Controller\\ClientesController:show' => '?',
            'App\\Controller\\ComentarioshospedajeController:delete' => '?',
            'App\\Controller\\ComentarioshospedajeController:edit' => '?',
            'App\\Controller\\ComentarioshospedajeController:index' => '?',
            'App\\Controller\\ComentarioshospedajeController:show' => '?',
            'App\\Controller\\GeonameController:listComunidades' => '?',
            'App\\Controller\\GeonameController:listPoblacion' => '?',
            'App\\Controller\\GeonameController:listProvincias' => '?',
            'App\\Controller\\HabitacionesController:edit' => '?',
            'App\\Controller\\HabitacionesController:index' => '?',
            'App\\Controller\\HabitacionesController:show' => '?',
            'App\\Controller\\HospedajeController:delete' => '?',
            'App\\Controller\\HospedajeController:edit' => '?',
            'App\\Controller\\HospedajeController:index' => '?',
            'App\\Controller\\HospedajeController:show' => '?',
            'App\\Controller\\PerfilController:delete' => '?',
            'App\\Controller\\PerfilController:edit' => '?',
            'App\\Controller\\PerfilController:index' => '?',
            'App\\Controller\\PerfilController:show' => '?',
            'App\\Controller\\ProveedoresController:registerProvider' => '?',
            'App\\Controller\\RegistrousuarioController:registerUser' => '?',
            'App\\Controller\\ReservasController:delete' => '?',
            'App\\Controller\\ReservasController:edit' => '?',
            'App\\Controller\\ReservasController:index' => '?',
            'App\\Controller\\ReservasController:show' => '?',
            'App\\Controller\\SeguridadController:login' => '?',
            'App\\Controller\\ServiciosController:delete' => '?',
            'App\\Controller\\ServiciosController:edit' => '?',
            'App\\Controller\\ServiciosController:index' => '?',
            'App\\Controller\\ServiciosController:show' => '?',
            'App\\Controller\\TipohospedajeController:delete' => '?',
            'App\\Controller\\TipohospedajeController:edit' => '?',
            'App\\Controller\\TipohospedajeController:index' => '?',
            'App\\Controller\\TipohospedajeController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
