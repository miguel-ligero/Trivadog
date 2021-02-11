<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/listadoccaa' => [[['_route' => 'app_listadoccaa', '_controller' => 'App\\Controller\\GeonameController::listComunidades'], null, ['POST' => 0], null, false, false, null]],
        '/listadopro' => [[['_route' => 'app_listadopro', '_controller' => 'App\\Controller\\GeonameController::listProvincias'], null, ['POST' => 0], null, false, false, null]],
        '/listadopobla' => [[['_route' => 'app_listadopobla', '_controller' => 'App\\Controller\\GeonameController::listPoblacion'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SeguridadController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SeguridadController::logout'], null, null, null, false, false, null]],
        '/home/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\HomeController::back'], null, null, null, false, false, null]],
        '/reservas/confirm' => [[['_route' => 'confirmarReserva', '_controller' => 'App\\Controller\\ReservasController::confirm'], null, ['POST' => 0], null, false, false, null]],
        '/registrousuario/guardar' => [[['_route' => 'guardarUsuario', '_controller' => 'App\\Controller\\RegistrousuarioController::registerUser'], null, ['POST' => 0], null, false, false, null]],
        '/registrousuario/form' => [[['_route' => 'registroUsuario', '_controller' => 'App\\Controller\\RegistrousuarioController::form'], null, null, null, false, false, null]],
        '/comentarioshospedaje/insertar' => [[['_route' => 'insertarComentario', '_controller' => 'App\\Controller\\ComentarioshospedajeController::insertComment'], null, ['POST' => 0], null, false, false, null]],
        '/proveedores/index' => [[['_route' => 'registroProveedor', '_controller' => 'App\\Controller\\ProveedoresController::index'], null, null, null, false, false, null]],
        '/proveedores/guardar' => [[['_route' => 'guardarProveedor', '_controller' => 'App\\Controller\\ProveedoresController::registerProvider'], null, ['POST' => 0], null, false, false, null]],
        '/proveedores/reservas' => [[['_route' => 'reservasProveedor', '_controller' => 'App\\Controller\\ProveedoresController::providerReserves'], null, null, null, false, false, null]],
        '/proveedores/reservas/guardar' => [[['_route' => 'guardarReservasProveedor', '_controller' => 'App\\Controller\\ProveedoresController::saveReserve'], null, ['POST' => 0], null, false, false, null]],
        '/proveedores/habitacion/nuevo' => [[['_route' => 'nuevaHabitacion', '_controller' => 'App\\Controller\\HabitacionesController::createEditRoom'], null, null, null, true, false, null]],
        '/proveedores/habitacion/guardar' => [[['_route' => 'guardarHabitacion', '_controller' => 'App\\Controller\\HabitacionesController::registerRoom'], null, ['POST' => 0], null, false, false, null]],
        '/hospedaje/alojamiento/nuevo' => [[['_route' => 'nuevAlojamiento', '_controller' => 'App\\Controller\\HospedajeController::createEditHost'], null, null, null, false, false, null]],
        '/hospedaje/alojamiento/guardar' => [[['_route' => 'guardarAlojamiento', '_controller' => 'App\\Controller\\HospedajeController::registerHost'], null, ['POST' => 0], null, false, false, null]],
        '/servicioshabitaciones/guardar' => [[['_route' => 'guardarServicioshabitaciones', '_controller' => 'App\\Controller\\ServicioshabitacionesController::registerservice'], null, ['POST' => 0], null, false, false, null]],
        '/multimedia/nuevo' => [[['_route' => 'nuevoMultimedia', '_controller' => 'App\\Controller\\MultimediaController::savePicture'], null, null, null, false, false, null]],
        '/multimedia/guardar' => [[['_route' => 'editarMultimedia', '_controller' => 'App\\Controller\\MultimediaController::savePicture'], null, null, null, false, false, null]],
        '/multimedia/principal' => [[['_route' => 'principalMultimedia', '_controller' => 'App\\Controller\\MultimediaController::changeMainImg'], null, ['POST' => 0], null, false, false, null]],
        '/serviciohabitaciones/index' => [[['_route' => 'servicioshabitaciones_index', '_controller' => 'App\\Controller\\ServicioshabitacionesController::index'], null, null, null, false, false, null]],
        '/serviciohabitaciones/new' => [[['_route' => 'servicioshabitaciones_new', '_controller' => 'App\\Controller\\ServicioshabitacionesController::new'], null, null, null, false, false, null]],
        '/clientes/index' => [[['_route' => 'clientes_index', '_controller' => 'App\\Controller\\ClientesController::index'], null, null, null, false, false, null]],
        '/clientes/new' => [[['_route' => 'clientes_new', '_controller' => 'App\\Controller\\ClientesController::new'], null, null, null, false, false, null]],
        '/comentarioshospedaje/index' => [[['_route' => 'comentarioshospedaje_index', '_controller' => 'App\\Controller\\ComentarioshospedajeController::index'], null, null, null, false, false, null]],
        '/comentarioshospedaje/new' => [[['_route' => 'comentarioshospedaje_new', '_controller' => 'App\\Controller\\ComentarioshospedajeController::new'], null, null, null, false, false, null]],
        '/habitaciones/index' => [[['_route' => 'habitaciones_index', '_controller' => 'App\\Controller\\HabitacionesController::index'], null, null, null, false, false, null]],
        '/habitaciones/new' => [[['_route' => 'habitaciones_new', '_controller' => 'App\\Controller\\HabitacionesController::new'], null, null, null, false, false, null]],
        '/hospedaje/index' => [[['_route' => 'hospedaje_index', '_controller' => 'App\\Controller\\HospedajeController::index'], null, null, null, false, false, null]],
        '/hospedaje/new' => [[['_route' => 'hospedaje_new', '_controller' => 'App\\Controller\\HospedajeController::new'], null, null, null, false, false, null]],
        '/reservas/index' => [[['_route' => 'reservas_index', '_controller' => 'App\\Controller\\ReservasController::index'], null, null, null, false, false, null]],
        '/reservas/new' => [[['_route' => 'reservas_new', '_controller' => 'App\\Controller\\ReservasController::new'], null, null, null, false, false, null]],
        '/perfil/index' => [[['_route' => 'perfil_index', '_controller' => 'App\\Controller\\PerfilController::index'], null, null, null, false, false, null]],
        '/perfil/new' => [[['_route' => 'perfil_new', '_controller' => 'App\\Controller\\PerfilController::new'], null, null, null, false, false, null]],
        '/servicios/index' => [[['_route' => 'servicios_index', '_controller' => 'App\\Controller\\ServiciosController::index'], null, null, null, false, false, null]],
        '/servicios/new' => [[['_route' => 'servicios_new', '_controller' => 'App\\Controller\\ServiciosController::new'], null, null, null, false, false, null]],
        '/tipohospedaje/index' => [[['_route' => 'tipohospedaje_index', '_controller' => 'App\\Controller\\TipohospedajeController::index'], null, null, null, false, false, null]],
        '/tipohospedaje/new' => [[['_route' => 'tipohospedaje_new', '_controller' => 'App\\Controller\\TipohospedajeController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/aucomplete(?:/([^/]++))?(*:32)'
                .'|/([^/]++)?(*:49)'
                .'|/h(?'
                    .'|abitaciones/(?'
                        .'|busqueda(?'
                            .'|(?:/([^/]++))?(*:101)'
                            .'|Habitacion(?:/([^/]++))?(*:133)'
                        .')'
                        .'|detalle/([^/]++)(*:158)'
                        .'|show/([^/]++)(*:179)'
                        .'|([^/]++)/(?'
                            .'|edit(*:203)'
                            .'|delete(*:217)'
                        .')'
                    .')'
                    .'|ospedaje/(?'
                        .'|alojamiento/editar/([^/]++)(?:/([^/]++))?(*:280)'
                        .'|show/([^/]++)(*:301)'
                        .'|([^/]++)/(?'
                            .'|edit(*:325)'
                            .'|delete(*:339)'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|servas/(?'
                        .'|lista/([^/]++)(*:380)'
                        .'|show/([^/]++)(*:401)'
                        .'|([^/]++)/(?'
                            .'|edit(*:425)'
                            .'|delete(*:439)'
                        .')'
                    .')'
                    .'|gistrousuario/(?'
                        .'|c(?'
                            .'|heckemail/([^/]++)(*:488)'
                            .'|uentacliente(?:/([^/]++)(?:/([^/]++))?)?(*:536)'
                        .')'
                        .'|nuevo(?:/([^/]++))?(*:564)'
                        .'|editar/([^/]++)(*:587)'
                    .')'
                .')'
                .'|/p(?'
                    .'|roveedores/(?'
                        .'|c(?'
                            .'|heckemail/([^/]++)(*:638)'
                            .'|uentaproveedor(?:/([^/]++))?(*:674)'
                            .'|rearreserva/([^/]++)(*:702)'
                        .')'
                        .'|nuevo(?:/([^/]++))?(*:730)'
                        .'|editar(?:/([^/]++))?(*:758)'
                        .'|reservas/(?'
                            .'|editar/([^/]++)(*:793)'
                            .'|borrar/([^/]++)/([^/]++)(*:825)'
                        .')'
                        .'|habitacion/(?'
                            .'|editar(?:/([^/]++)(?:/([^/]++))?)?(*:882)'
                            .'|borrar/([^/]++)(?:/([^/]++))?(*:919)'
                        .')'
                    .')'
                    .'|erfil/(?'
                        .'|show/([^/]++)(*:951)'
                        .'|([^/]++)/(?'
                            .'|edit(*:975)'
                            .'|delete(*:989)'
                        .')'
                    .')'
                .')'
                .'|/servicio(?'
                    .'|s(?'
                        .'|habitaciones/formularioservicios/([^/]++)(*:1057)'
                        .'|/(?'
                            .'|show/([^/]++)(*:1083)'
                            .'|([^/]++)/(?'
                                .'|edit(*:1108)'
                                .'|delete(*:1123)'
                            .')'
                        .')'
                    .')'
                    .'|habitaciones/(?'
                        .'|show/([^/]++)(*:1164)'
                        .'|([^/]++)/(?'
                            .'|edit(*:1189)'
                            .'|delete(*:1204)'
                        .')'
                    .')'
                .')'
                .'|/multimedia/(?'
                    .'|borrar/([^/]++)/([^/]++)(*:1255)'
                    .'|([^/]++)(*:1272)'
                    .'|index(*:1286)'
                    .'|new(*:1298)'
                    .'|show/([^/]++)(*:1320)'
                    .'|([^/]++)/(?'
                        .'|edit(*:1345)'
                        .'|delete(*:1360)'
                    .')'
                .')'
                .'|/c(?'
                    .'|lientes/(?'
                        .'|show/([^/]++)(*:1400)'
                        .'|([^/]++)/(?'
                            .'|edit(*:1425)'
                            .'|delete(*:1440)'
                        .')'
                    .')'
                    .'|omentarioshospedaje/(?'
                        .'|show/([^/]++)(*:1487)'
                        .'|([^/]++)/(?'
                            .'|edit(*:1512)'
                            .'|delete(*:1527)'
                        .')'
                    .')'
                .')'
                .'|/tipohospedaje/(?'
                    .'|show/([^/]++)(*:1570)'
                    .'|([^/]++)/(?'
                        .'|edit(*:1595)'
                        .'|delete(*:1610)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'autocomplete', 'texto' => null, '_controller' => 'App\\Controller\\AutocompleteController::busqueda'], ['texto'], ['POST' => 0], null, false, true, null]],
        49 => [[['_route' => 'index', 'modalmessage' => null, '_controller' => 'App\\Controller\\HomeController::index'], ['modalmessage'], null, null, false, true, null]],
        101 => [[['_route' => 'busqueda', 'page' => null, '_controller' => 'App\\Controller\\HabitacionesController::search'], ['page'], null, null, false, true, null]],
        133 => [[['_route' => 'busquedaHabitacion', 'page' => null, '_controller' => 'App\\Controller\\HabitacionesController::resultRooms'], ['page'], null, null, false, true, null]],
        158 => [[['_route' => 'detalle', '_controller' => 'App\\Controller\\HabitacionesController::detail'], ['idHabitacion'], null, null, false, true, null]],
        179 => [[['_route' => 'habitaciones_show', '_controller' => 'App\\Controller\\HabitacionesController::show'], ['id'], null, null, false, true, null]],
        203 => [[['_route' => 'habitaciones_edit', '_controller' => 'App\\Controller\\HabitacionesController::edit'], ['id'], null, null, false, false, null]],
        217 => [[['_route' => 'habitaciones_delete', '_controller' => 'App\\Controller\\HabitacionesController::delete'], ['id'], null, null, false, false, null]],
        280 => [[['_route' => 'editarAlojamiento', 'providerid' => null, '_controller' => 'App\\Controller\\HospedajeController::createEditHost'], ['hostid', 'providerid'], null, null, false, true, null]],
        301 => [[['_route' => 'hospedaje_show', '_controller' => 'App\\Controller\\HospedajeController::show'], ['id'], null, null, false, true, null]],
        325 => [[['_route' => 'hospedaje_edit', '_controller' => 'App\\Controller\\HospedajeController::edit'], ['id'], null, null, false, false, null]],
        339 => [[['_route' => 'hospedaje_delete', '_controller' => 'App\\Controller\\HospedajeController::delete'], ['id'], null, null, false, false, null]],
        380 => [[['_route' => 'listaReserva', '_controller' => 'App\\Controller\\ReservasController::list'], ['idHabitacion'], null, null, false, true, null]],
        401 => [[['_route' => 'reservas_show', '_controller' => 'App\\Controller\\ReservasController::show'], ['id'], null, null, false, true, null]],
        425 => [[['_route' => 'reservas_edit', '_controller' => 'App\\Controller\\ReservasController::edit'], ['id'], null, null, false, false, null]],
        439 => [[['_route' => 'reservas_delete', '_controller' => 'App\\Controller\\ReservasController::delete'], ['id'], null, null, false, false, null]],
        488 => [[['_route' => 'comprobarEmail', '_controller' => 'App\\Controller\\RegistrousuarioController::checkEmail'], ['email'], ['GET' => 0], null, false, true, null]],
        536 => [[['_route' => 'cuentaCliente', 'id' => null, 'hostingtypeselect' => null, '_controller' => 'App\\Controller\\RegistrousuarioController::customerFilter'], ['id', 'hostingtypeselect'], null, null, false, true, null]],
        564 => [[['_route' => 'nuevoUsuario', 'id' => null, '_controller' => 'App\\Controller\\RegistrousuarioController::createEdit'], ['id'], null, null, false, true, null]],
        587 => [[['_route' => 'editarUsuario', '_controller' => 'App\\Controller\\RegistrousuarioController::createEdit'], ['id'], null, null, false, true, null]],
        638 => [[['_route' => 'comprobarEmailProveedor', '_controller' => 'App\\Controller\\ProveedoresController::checkEmail'], ['email'], null, null, false, true, null]],
        674 => [[['_route' => 'cuentaProveedor', 'errorhost' => null, '_controller' => 'App\\Controller\\ProveedoresController::providerAccount'], ['errorhost'], null, null, false, true, null]],
        702 => [[['_route' => 'crearReservasProveedor', '_controller' => 'App\\Controller\\ProveedoresController::createReserves'], ['roomid'], null, null, false, true, null]],
        730 => [[['_route' => 'nuevoProveedor', 'id' => null, '_controller' => 'App\\Controller\\ProveedoresController::createEdit'], ['id'], null, null, false, true, null]],
        758 => [[['_route' => 'editarProveedor', 'id' => null, '_controller' => 'App\\Controller\\ProveedoresController::createEdit'], ['id'], null, null, false, true, null]],
        793 => [[['_route' => 'editarReservasProveedor', '_controller' => 'App\\Controller\\ProveedoresController::editReserve'], ['reserveid'], null, null, false, true, null]],
        825 => [[['_route' => 'borrarReservasProveedor', '_controller' => 'App\\Controller\\ProveedoresController::deleteReserve'], ['reserveid', 'roomid'], null, null, false, true, null]],
        882 => [[['_route' => 'editarHabitacion', 'roomid' => null, 'page' => null, '_controller' => 'App\\Controller\\HabitacionesController::createEditRoom'], ['roomid', 'page'], null, null, false, true, null]],
        919 => [[['_route' => 'borrarHabitacion', 'page' => null, '_controller' => 'App\\Controller\\HabitacionesController::deleteRoom'], ['roomid', 'page'], null, null, false, true, null]],
        951 => [[['_route' => 'perfil_show', '_controller' => 'App\\Controller\\PerfilController::show'], ['id'], null, null, false, true, null]],
        975 => [[['_route' => 'perfil_edit', '_controller' => 'App\\Controller\\PerfilController::edit'], ['id'], null, null, false, false, null]],
        989 => [[['_route' => 'perfil_delete', '_controller' => 'App\\Controller\\PerfilController::delete'], ['id'], null, null, false, false, null]],
        1057 => [[['_route' => 'editarServicioshabitaciones', '_controller' => 'App\\Controller\\ServicioshabitacionesController::services'], ['roomid'], null, null, false, true, null]],
        1083 => [[['_route' => 'servicios_show', '_controller' => 'App\\Controller\\ServiciosController::show'], ['id'], null, null, false, true, null]],
        1108 => [[['_route' => 'servicios_edit', '_controller' => 'App\\Controller\\ServiciosController::edit'], ['id'], null, null, false, false, null]],
        1123 => [[['_route' => 'servicios_delete', '_controller' => 'App\\Controller\\ServiciosController::delete'], ['id'], null, null, false, false, null]],
        1164 => [[['_route' => 'servicioshabitaciones_show', '_controller' => 'App\\Controller\\ServicioshabitacionesController::show'], ['id'], null, null, false, true, null]],
        1189 => [[['_route' => 'servicioshabitaciones_edit', '_controller' => 'App\\Controller\\ServicioshabitacionesController::edit'], ['id'], null, null, false, false, null]],
        1204 => [[['_route' => 'servicioshabitaciones_delete', '_controller' => 'App\\Controller\\ServicioshabitacionesController::delete'], ['id'], null, null, false, false, null]],
        1255 => [[['_route' => 'eliminarMultimedia', '_controller' => 'App\\Controller\\MultimediaController::deletePicture'], ['pictureid', 'roomid'], null, null, false, true, null]],
        1272 => [[['_route' => 'habitacionMultimedia', '_controller' => 'App\\Controller\\MultimediaController::room'], ['roomid'], null, null, false, true, null]],
        1286 => [[['_route' => 'multimedia_index', '_controller' => 'App\\Controller\\MultimediaController::index'], [], null, null, false, false, null]],
        1298 => [[['_route' => 'multimedia_new', '_controller' => 'App\\Controller\\MultimediaController::new'], [], null, null, false, false, null]],
        1320 => [[['_route' => 'multimedia_show', '_controller' => 'App\\Controller\\MultimediaController::show'], ['id'], null, null, false, true, null]],
        1345 => [[['_route' => 'multimedia_edit', '_controller' => 'App\\Controller\\MultimediaController::edit'], ['id'], null, null, false, false, null]],
        1360 => [[['_route' => 'multimedia_delete', '_controller' => 'App\\Controller\\MultimediaController::delete'], ['id'], null, null, false, false, null]],
        1400 => [[['_route' => 'clientes_show', '_controller' => 'App\\Controller\\ClientesController::show'], ['id'], null, null, false, true, null]],
        1425 => [[['_route' => 'clientes_edit', '_controller' => 'App\\Controller\\ClientesController::edit'], ['id'], null, null, false, false, null]],
        1440 => [[['_route' => 'clientes_delete', '_controller' => 'App\\Controller\\ClientesController::delete'], ['id'], null, null, false, false, null]],
        1487 => [[['_route' => 'comentarioshospedaje_show', '_controller' => 'App\\Controller\\ComentarioshospedajeController::show'], ['id'], null, null, false, true, null]],
        1512 => [[['_route' => 'comentarioshospedaje_edit', '_controller' => 'App\\Controller\\ComentarioshospedajeController::edit'], ['id'], null, null, false, false, null]],
        1527 => [[['_route' => 'comentarioshospedaje_delete', '_controller' => 'App\\Controller\\ComentarioshospedajeController::delete'], ['id'], null, null, false, false, null]],
        1570 => [[['_route' => 'tipohospedaje_show', '_controller' => 'App\\Controller\\TipohospedajeController::show'], ['id'], null, null, false, true, null]],
        1595 => [[['_route' => 'tipohospedaje_edit', '_controller' => 'App\\Controller\\TipohospedajeController::edit'], ['id'], null, null, false, false, null]],
        1610 => [
            [['_route' => 'tipohospedaje_delete', '_controller' => 'App\\Controller\\TipohospedajeController::delete'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
