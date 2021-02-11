<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'autocomplete' => [['texto'], ['texto' => null, '_controller' => 'App\\Controller\\AutocompleteController::busqueda'], [], [['variable', '/', '[^/]++', 'texto', true], ['text', '/aucomplete']], [], []],
    'app_listadoccaa' => [[], ['_controller' => 'App\\Controller\\GeonameController::listComunidades'], [], [['text', '/listadoccaa']], [], []],
    'app_listadopro' => [[], ['_controller' => 'App\\Controller\\GeonameController::listProvincias'], [], [['text', '/listadopro']], [], []],
    'app_listadopobla' => [[], ['_controller' => 'App\\Controller\\GeonameController::listPoblacion'], [], [['text', '/listadopobla']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SeguridadController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SeguridadController::logout'], [], [['text', '/logout']], [], []],
    'index' => [['modalmessage'], ['modalmessage' => null, '_controller' => 'App\\Controller\\HomeController::index'], [], [['variable', '/', '[^/]++', 'modalmessage', true]], [], []],
    'back' => [[], ['_controller' => 'App\\Controller\\HomeController::back'], [], [['text', '/home/back']], [], []],
    'busqueda' => [['page'], ['page' => null, '_controller' => 'App\\Controller\\HabitacionesController::search'], [], [['variable', '/', '[^/]++', 'page', true], ['text', '/habitaciones/busqueda']], [], []],
    'busquedaHabitacion' => [['page'], ['page' => null, '_controller' => 'App\\Controller\\HabitacionesController::resultRooms'], [], [['variable', '/', '[^/]++', 'page', true], ['text', '/habitaciones/busquedaHabitacion']], [], []],
    'detalle' => [['idHabitacion'], ['_controller' => 'App\\Controller\\HabitacionesController::detail'], [], [['variable', '/', '[^/]++', 'idHabitacion', true], ['text', '/habitaciones/detalle']], [], []],
    'listaReserva' => [['idHabitacion'], ['_controller' => 'App\\Controller\\ReservasController::list'], [], [['variable', '/', '[^/]++', 'idHabitacion', true], ['text', '/reservas/lista']], [], []],
    'confirmarReserva' => [[], ['_controller' => 'App\\Controller\\ReservasController::confirm'], [], [['text', '/reservas/confirm']], [], []],
    'guardarUsuario' => [[], ['_controller' => 'App\\Controller\\RegistrousuarioController::registerUser'], [], [['text', '/registrousuario/guardar']], [], []],
    'registroUsuario' => [[], ['_controller' => 'App\\Controller\\RegistrousuarioController::form'], [], [['text', '/registrousuario/form']], [], []],
    'comprobarEmail' => [['email'], ['_controller' => 'App\\Controller\\RegistrousuarioController::checkEmail'], [], [['variable', '/', '[^/]++', 'email', true], ['text', '/registrousuario/checkemail']], [], []],
    'nuevoUsuario' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\RegistrousuarioController::createEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/registrousuario/nuevo']], [], []],
    'editarUsuario' => [['id'], ['_controller' => 'App\\Controller\\RegistrousuarioController::createEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/registrousuario/editar']], [], []],
    'cuentaCliente' => [['id', 'hostingtypeselect'], ['id' => null, 'hostingtypeselect' => null, '_controller' => 'App\\Controller\\RegistrousuarioController::customerFilter'], [], [['variable', '/', '[^/]++', 'hostingtypeselect', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/registrousuario/cuentacliente']], [], []],
    'insertarComentario' => [[], ['_controller' => 'App\\Controller\\ComentarioshospedajeController::insertComment'], [], [['text', '/comentarioshospedaje/insertar']], [], []],
    'registroProveedor' => [[], ['_controller' => 'App\\Controller\\ProveedoresController::index'], [], [['text', '/proveedores/index']], [], []],
    'comprobarEmailProveedor' => [['email'], ['_controller' => 'App\\Controller\\ProveedoresController::checkEmail'], [], [['variable', '/', '[^/]++', 'email', true], ['text', '/proveedores/checkemail']], [], []],
    'nuevoProveedor' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\ProveedoresController::createEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/proveedores/nuevo']], [], []],
    'editarProveedor' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\ProveedoresController::createEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/proveedores/editar']], [], []],
    'guardarProveedor' => [[], ['_controller' => 'App\\Controller\\ProveedoresController::registerProvider'], [], [['text', '/proveedores/guardar']], [], []],
    'cuentaProveedor' => [['errorhost'], ['errorhost' => null, '_controller' => 'App\\Controller\\ProveedoresController::providerAccount'], [], [['variable', '/', '[^/]++', 'errorhost', true], ['text', '/proveedores/cuentaproveedor']], [], []],
    'reservasProveedor' => [[], ['_controller' => 'App\\Controller\\ProveedoresController::providerReserves'], [], [['text', '/proveedores/reservas']], [], []],
    'crearReservasProveedor' => [['roomid'], ['_controller' => 'App\\Controller\\ProveedoresController::createReserves'], [], [['variable', '/', '[^/]++', 'roomid', true], ['text', '/proveedores/crearreserva']], [], []],
    'editarReservasProveedor' => [['reserveid'], ['_controller' => 'App\\Controller\\ProveedoresController::editReserve'], [], [['variable', '/', '[^/]++', 'reserveid', true], ['text', '/proveedores/reservas/editar']], [], []],
    'borrarReservasProveedor' => [['reserveid', 'roomid'], ['_controller' => 'App\\Controller\\ProveedoresController::deleteReserve'], [], [['variable', '/', '[^/]++', 'roomid', true], ['variable', '/', '[^/]++', 'reserveid', true], ['text', '/proveedores/reservas/borrar']], [], []],
    'guardarReservasProveedor' => [[], ['_controller' => 'App\\Controller\\ProveedoresController::saveReserve'], [], [['text', '/proveedores/reservas/guardar']], [], []],
    'nuevaHabitacion' => [[], ['_controller' => 'App\\Controller\\HabitacionesController::createEditRoom'], [], [['text', '/proveedores/habitacion/nuevo/']], [], []],
    'editarHabitacion' => [['roomid', 'page'], ['roomid' => null, 'page' => null, '_controller' => 'App\\Controller\\HabitacionesController::createEditRoom'], [], [['variable', '/', '[^/]++', 'page', true], ['variable', '/', '[^/]++', 'roomid', true], ['text', '/proveedores/habitacion/editar']], [], []],
    'guardarHabitacion' => [[], ['_controller' => 'App\\Controller\\HabitacionesController::registerRoom'], [], [['text', '/proveedores/habitacion/guardar']], [], []],
    'borrarHabitacion' => [['roomid', 'page'], ['page' => null, '_controller' => 'App\\Controller\\HabitacionesController::deleteRoom'], [], [['variable', '/', '[^/]++', 'page', true], ['variable', '/', '[^/]++', 'roomid', true], ['text', '/proveedores/habitacion/borrar']], [], []],
    'nuevAlojamiento' => [[], ['_controller' => 'App\\Controller\\HospedajeController::createEditHost'], [], [['text', '/hospedaje/alojamiento/nuevo']], [], []],
    'editarAlojamiento' => [['hostid'], ['_controller' => 'App\\Controller\\HospedajeController::createEditHost'], [], [['variable', '/', '[^/]++', 'hostid', true], ['text', '/hospedaje/alojamiento/editar']], [], []],
    'guardarAlojamiento' => [[], ['_controller' => 'App\\Controller\\HospedajeController::registerHost'], [], [['text', '/hospedaje/alojamiento/guardar']], [], []],
    'editarServicioshabitaciones' => [['roomid'], ['_controller' => 'App\\Controller\\ServicioshabitacionesController::services'], [], [['variable', '/', '[^/]++', 'roomid', true], ['text', '/servicioshabitaciones/formularioservicios']], [], []],
    'guardarServicioshabitaciones' => [[], ['_controller' => 'App\\Controller\\ServicioshabitacionesController::registerservice'], [], [['text', '/servicioshabitaciones/guardar']], [], []],
    'nuevoMultimedia' => [[], ['_controller' => 'App\\Controller\\MultimediaController::savePicture'], [], [['text', '/multimedia/nuevo']], [], []],
    'editarMultimedia' => [[], ['_controller' => 'App\\Controller\\MultimediaController::savePicture'], [], [['text', '/multimedia/guardar']], [], []],
    'principalMultimedia' => [[], ['_controller' => 'App\\Controller\\MultimediaController::changeMainImg'], [], [['text', '/multimedia/principal']], [], []],
    'eliminarMultimedia' => [['pictureid', 'roomid'], ['_controller' => 'App\\Controller\\MultimediaController::deletePicture'], [], [['variable', '/', '[^/]++', 'roomid', true], ['variable', '/', '[^/]++', 'pictureid', true], ['text', '/multimedia/borrar']], [], []],
    'habitacionMultimedia' => [['roomid'], ['_controller' => 'App\\Controller\\MultimediaController::room'], [], [['variable', '/', '[^/]++', 'roomid', true], ['text', '/multimedia']], [], []],
    'servicioshabitaciones_index' => [[], ['_controller' => 'App\\Controller\\ServicioshabitacionesController::index'], [], [['text', '/serviciohabitaciones/index']], [], []],
    'servicioshabitaciones_new' => [[], ['_controller' => 'App\\Controller\\ServicioshabitacionesController::new'], [], [['text', '/serviciohabitaciones/new']], [], []],
    'servicioshabitaciones_show' => [['id'], ['_controller' => 'App\\Controller\\ServicioshabitacionesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/serviciohabitaciones/show']], [], []],
    'servicioshabitaciones_edit' => [['id'], ['_controller' => 'App\\Controller\\ServicioshabitacionesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/serviciohabitaciones']], [], []],
    'servicioshabitaciones_delete' => [['id'], ['_controller' => 'App\\Controller\\ServicioshabitacionesController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/serviciohabitaciones']], [], []],
    'clientes_index' => [[], ['_controller' => 'App\\Controller\\ClientesController::index'], [], [['text', '/clientes/index']], [], []],
    'clientes_new' => [[], ['_controller' => 'App\\Controller\\ClientesController::new'], [], [['text', '/clientes/new']], [], []],
    'clientes_show' => [['id'], ['_controller' => 'App\\Controller\\ClientesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/clientes/show']], [], []],
    'clientes_edit' => [['id'], ['_controller' => 'App\\Controller\\ClientesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/clientes']], [], []],
    'clientes_delete' => [['id'], ['_controller' => 'App\\Controller\\ClientesController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/clientes']], [], []],
    'comentarioshospedaje_index' => [[], ['_controller' => 'App\\Controller\\ComentarioshospedajeController::index'], [], [['text', '/comentarioshospedaje/index']], [], []],
    'comentarioshospedaje_new' => [[], ['_controller' => 'App\\Controller\\ComentarioshospedajeController::new'], [], [['text', '/comentarioshospedaje/new']], [], []],
    'comentarioshospedaje_show' => [['id'], ['_controller' => 'App\\Controller\\ComentarioshospedajeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comentarioshospedaje/show']], [], []],
    'comentarioshospedaje_edit' => [['id'], ['_controller' => 'App\\Controller\\ComentarioshospedajeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/comentarioshospedaje']], [], []],
    'comentarioshospedaje_delete' => [['id'], ['_controller' => 'App\\Controller\\ComentarioshospedajeController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/comentarioshospedaje']], [], []],
    'habitaciones_index' => [[], ['_controller' => 'App\\Controller\\HabitacionesController::index'], [], [['text', '/habitaciones/index']], [], []],
    'habitaciones_new' => [[], ['_controller' => 'App\\Controller\\HabitacionesController::new'], [], [['text', '/habitaciones/new']], [], []],
    'habitaciones_show' => [['id'], ['_controller' => 'App\\Controller\\HabitacionesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/habitaciones/show']], [], []],
    'habitaciones_edit' => [['id'], ['_controller' => 'App\\Controller\\HabitacionesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/habitaciones']], [], []],
    'habitaciones_delete' => [['id'], ['_controller' => 'App\\Controller\\HabitacionesController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/habitaciones']], [], []],
    'hospedaje_index' => [[], ['_controller' => 'App\\Controller\\HospedajeController::index'], [], [['text', '/hospedaje/index']], [], []],
    'hospedaje_new' => [[], ['_controller' => 'App\\Controller\\HospedajeController::new'], [], [['text', '/hospedaje/new']], [], []],
    'hospedaje_show' => [['id'], ['_controller' => 'App\\Controller\\HospedajeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/hospedaje/show']], [], []],
    'hospedaje_edit' => [['id'], ['_controller' => 'App\\Controller\\HospedajeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/hospedaje']], [], []],
    'hospedaje_delete' => [['id'], ['_controller' => 'App\\Controller\\HospedajeController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/hospedaje']], [], []],
    'multimedia_index' => [[], ['_controller' => 'App\\Controller\\MultimediaController::index'], [], [['text', '/multimedia/index']], [], []],
    'multimedia_new' => [[], ['_controller' => 'App\\Controller\\MultimediaController::new'], [], [['text', '/multimedia/new']], [], []],
    'multimedia_show' => [['id'], ['_controller' => 'App\\Controller\\MultimediaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/multimedia/show']], [], []],
    'multimedia_edit' => [['id'], ['_controller' => 'App\\Controller\\MultimediaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/multimedia']], [], []],
    'multimedia_delete' => [['id'], ['_controller' => 'App\\Controller\\MultimediaController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/multimedia']], [], []],
    'reservas_index' => [[], ['_controller' => 'App\\Controller\\ReservasController::index'], [], [['text', '/reservas/index']], [], []],
    'reservas_new' => [[], ['_controller' => 'App\\Controller\\ReservasController::new'], [], [['text', '/reservas/new']], [], []],
    'reservas_show' => [['id'], ['_controller' => 'App\\Controller\\ReservasController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservas/show']], [], []],
    'reservas_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservasController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservas']], [], []],
    'reservas_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservasController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservas']], [], []],
    'perfil_index' => [[], ['_controller' => 'App\\Controller\\PerfilController::index'], [], [['text', '/perfil/index']], [], []],
    'perfil_new' => [[], ['_controller' => 'App\\Controller\\PerfilController::new'], [], [['text', '/perfil/new']], [], []],
    'perfil_show' => [['id'], ['_controller' => 'App\\Controller\\PerfilController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/perfil/show']], [], []],
    'perfil_edit' => [['id'], ['_controller' => 'App\\Controller\\PerfilController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/perfil']], [], []],
    'perfil_delete' => [['id'], ['_controller' => 'App\\Controller\\PerfilController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/perfil']], [], []],
    'servicios_index' => [[], ['_controller' => 'App\\Controller\\ServiciosController::index'], [], [['text', '/servicios/index']], [], []],
    'servicios_new' => [[], ['_controller' => 'App\\Controller\\ServiciosController::new'], [], [['text', '/servicios/new']], [], []],
    'servicios_show' => [['id'], ['_controller' => 'App\\Controller\\ServiciosController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/servicios/show']], [], []],
    'servicios_edit' => [['id'], ['_controller' => 'App\\Controller\\ServiciosController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/servicios']], [], []],
    'servicios_delete' => [['id'], ['_controller' => 'App\\Controller\\ServiciosController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/servicios']], [], []],
    'tipohospedaje_index' => [[], ['_controller' => 'App\\Controller\\TipohospedajeController::index'], [], [['text', '/tipohospedaje/index']], [], []],
    'tipohospedaje_new' => [[], ['_controller' => 'App\\Controller\\TipohospedajeController::new'], [], [['text', '/tipohospedaje/new']], [], []],
    'tipohospedaje_show' => [['id'], ['_controller' => 'App\\Controller\\TipohospedajeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tipohospedaje/show']], [], []],
    'tipohospedaje_edit' => [['id'], ['_controller' => 'App\\Controller\\TipohospedajeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/tipohospedaje']], [], []],
    'tipohospedaje_delete' => [['id'], ['_controller' => 'App\\Controller\\TipohospedajeController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/tipohospedaje']], [], []],
];
