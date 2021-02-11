<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/aucomplete(?:/([^/]++))?(*:194)'
                .'|/([^/]++)?(*:212)'
                .'|/h(?'
                    .'|abitaciones/(?'
                        .'|busqueda(?'
                            .'|(?:/([^/]++))?(*:265)'
                            .'|Habitacion(?:/([^/]++))?(*:297)'
                        .')'
                        .'|detalle/([^/]++)(*:322)'
                        .'|show/([^/]++)(*:343)'
                        .'|([^/]++)/(?'
                            .'|edit(*:367)'
                            .'|delete(*:381)'
                        .')'
                    .')'
                    .'|ospedaje/(?'
                        .'|alojamiento/editar/([^/]++)(*:430)'
                        .'|show/([^/]++)(*:451)'
                        .'|([^/]++)/(?'
                            .'|edit(*:475)'
                            .'|delete(*:489)'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|servas/(?'
                        .'|lista/([^/]++)(*:530)'
                        .'|show/([^/]++)(*:551)'
                        .'|([^/]++)/(?'
                            .'|edit(*:575)'
                            .'|delete(*:589)'
                        .')'
                    .')'
                    .'|gistrousuario/(?'
                        .'|c(?'
                            .'|heckemail/([^/]++)(*:638)'
                            .'|uentacliente(?:/([^/]++)(?:/([^/]++))?)?(*:686)'
                        .')'
                        .'|nuevo(?:/([^/]++))?(*:714)'
                        .'|editar/([^/]++)(*:737)'
                    .')'
                .')'
                .'|/p(?'
                    .'|roveedores/(?'
                        .'|c(?'
                            .'|heckemail/([^/]++)(*:788)'
                            .'|uentaproveedor(?:/([^/]++))?(*:824)'
                            .'|rearreserva/([^/]++)(*:852)'
                        .')'
                        .'|nuevo(?:/([^/]++))?(*:880)'
                        .'|editar(?:/([^/]++))?(*:908)'
                        .'|reservas/(?'
                            .'|editar/([^/]++)(*:943)'
                            .'|borrar/([^/]++)/([^/]++)(*:975)'
                        .')'
                        .'|habitacion/(?'
                            .'|editar(?:/([^/]++)(?:/([^/]++))?)?(*:1032)'
                            .'|borrar/([^/]++)(?:/([^/]++))?(*:1070)'
                        .')'
                    .')'
                    .'|erfil/(?'
                        .'|show/([^/]++)(*:1103)'
                        .'|([^/]++)/(?'
                            .'|edit(*:1128)'
                            .'|delete(*:1143)'
                        .')'
                    .')'
                .')'
                .'|/servicio(?'
                    .'|s(?'
                        .'|habitaciones/formularioservicios/([^/]++)(*:1212)'
                        .'|/(?'
                            .'|show/([^/]++)(*:1238)'
                            .'|([^/]++)/(?'
                                .'|edit(*:1263)'
                                .'|delete(*:1278)'
                            .')'
                        .')'
                    .')'
                    .'|habitaciones/(?'
                        .'|show/([^/]++)(*:1319)'
                        .'|([^/]++)/(?'
                            .'|edit(*:1344)'
                            .'|delete(*:1359)'
                        .')'
                    .')'
                .')'
                .'|/multimedia/(?'
                    .'|borrar/([^/]++)/([^/]++)(*:1410)'
                    .'|([^/]++)(*:1427)'
                    .'|index(*:1441)'
                    .'|new(*:1453)'
                    .'|show/([^/]++)(*:1475)'
                    .'|([^/]++)/(?'
                        .'|edit(*:1500)'
                        .'|delete(*:1515)'
                    .')'
                .')'
                .'|/c(?'
                    .'|lientes/(?'
                        .'|show/([^/]++)(*:1555)'
                        .'|([^/]++)/(?'
                            .'|edit(*:1580)'
                            .'|delete(*:1595)'
                        .')'
                    .')'
                    .'|omentarioshospedaje/(?'
                        .'|show/([^/]++)(*:1642)'
                        .'|([^/]++)/(?'
                            .'|edit(*:1667)'
                            .'|delete(*:1682)'
                        .')'
                    .')'
                .')'
                .'|/tipohospedaje/(?'
                    .'|show/([^/]++)(*:1725)'
                    .'|([^/]++)/(?'
                        .'|edit(*:1750)'
                        .'|delete(*:1765)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'autocomplete', 'texto' => null, '_controller' => 'App\\Controller\\AutocompleteController::busqueda'], ['texto'], ['POST' => 0], null, false, true, null]],
        212 => [[['_route' => 'index', 'modalmessage' => null, '_controller' => 'App\\Controller\\HomeController::index'], ['modalmessage'], null, null, false, true, null]],
        265 => [[['_route' => 'busqueda', 'page' => null, '_controller' => 'App\\Controller\\HabitacionesController::search'], ['page'], null, null, false, true, null]],
        297 => [[['_route' => 'busquedaHabitacion', 'page' => null, '_controller' => 'App\\Controller\\HabitacionesController::resultRooms'], ['page'], null, null, false, true, null]],
        322 => [[['_route' => 'detalle', '_controller' => 'App\\Controller\\HabitacionesController::detail'], ['idHabitacion'], null, null, false, true, null]],
        343 => [[['_route' => 'habitaciones_show', '_controller' => 'App\\Controller\\HabitacionesController::show'], ['id'], null, null, false, true, null]],
        367 => [[['_route' => 'habitaciones_edit', '_controller' => 'App\\Controller\\HabitacionesController::edit'], ['id'], null, null, false, false, null]],
        381 => [[['_route' => 'habitaciones_delete', '_controller' => 'App\\Controller\\HabitacionesController::delete'], ['id'], null, null, false, false, null]],
        430 => [[['_route' => 'editarAlojamiento', '_controller' => 'App\\Controller\\HospedajeController::createEditHost'], ['hostid'], null, null, false, true, null]],
        451 => [[['_route' => 'hospedaje_show', '_controller' => 'App\\Controller\\HospedajeController::show'], ['id'], null, null, false, true, null]],
        475 => [[['_route' => 'hospedaje_edit', '_controller' => 'App\\Controller\\HospedajeController::edit'], ['id'], null, null, false, false, null]],
        489 => [[['_route' => 'hospedaje_delete', '_controller' => 'App\\Controller\\HospedajeController::delete'], ['id'], null, null, false, false, null]],
        530 => [[['_route' => 'listaReserva', '_controller' => 'App\\Controller\\ReservasController::list'], ['idHabitacion'], null, null, false, true, null]],
        551 => [[['_route' => 'reservas_show', '_controller' => 'App\\Controller\\ReservasController::show'], ['id'], null, null, false, true, null]],
        575 => [[['_route' => 'reservas_edit', '_controller' => 'App\\Controller\\ReservasController::edit'], ['id'], null, null, false, false, null]],
        589 => [[['_route' => 'reservas_delete', '_controller' => 'App\\Controller\\ReservasController::delete'], ['id'], null, null, false, false, null]],
        638 => [[['_route' => 'comprobarEmail', '_controller' => 'App\\Controller\\RegistrousuarioController::checkEmail'], ['email'], ['GET' => 0], null, false, true, null]],
        686 => [[['_route' => 'cuentaCliente', 'id' => null, 'hostingtypeselect' => null, '_controller' => 'App\\Controller\\RegistrousuarioController::customerFilter'], ['id', 'hostingtypeselect'], null, null, false, true, null]],
        714 => [[['_route' => 'nuevoUsuario', 'id' => null, '_controller' => 'App\\Controller\\RegistrousuarioController::createEdit'], ['id'], null, null, false, true, null]],
        737 => [[['_route' => 'editarUsuario', '_controller' => 'App\\Controller\\RegistrousuarioController::createEdit'], ['id'], null, null, false, true, null]],
        788 => [[['_route' => 'comprobarEmailProveedor', '_controller' => 'App\\Controller\\ProveedoresController::checkEmail'], ['email'], null, null, false, true, null]],
        824 => [[['_route' => 'cuentaProveedor', 'errorhost' => null, '_controller' => 'App\\Controller\\ProveedoresController::providerAccount'], ['errorhost'], null, null, false, true, null]],
        852 => [[['_route' => 'crearReservasProveedor', '_controller' => 'App\\Controller\\ProveedoresController::createReserves'], ['roomid'], null, null, false, true, null]],
        880 => [[['_route' => 'nuevoProveedor', 'id' => null, '_controller' => 'App\\Controller\\ProveedoresController::createEdit'], ['id'], null, null, false, true, null]],
        908 => [[['_route' => 'editarProveedor', 'id' => null, '_controller' => 'App\\Controller\\ProveedoresController::createEdit'], ['id'], null, null, false, true, null]],
        943 => [[['_route' => 'editarReservasProveedor', '_controller' => 'App\\Controller\\ProveedoresController::editReserve'], ['reserveid'], null, null, false, true, null]],
        975 => [[['_route' => 'borrarReservasProveedor', '_controller' => 'App\\Controller\\ProveedoresController::deleteReserve'], ['reserveid', 'roomid'], null, null, false, true, null]],
        1032 => [[['_route' => 'editarHabitacion', 'roomid' => null, 'page' => null, '_controller' => 'App\\Controller\\HabitacionesController::createEditRoom'], ['roomid', 'page'], null, null, false, true, null]],
        1070 => [[['_route' => 'borrarHabitacion', 'page' => null, '_controller' => 'App\\Controller\\HabitacionesController::deleteRoom'], ['roomid', 'page'], null, null, false, true, null]],
        1103 => [[['_route' => 'perfil_show', '_controller' => 'App\\Controller\\PerfilController::show'], ['id'], null, null, false, true, null]],
        1128 => [[['_route' => 'perfil_edit', '_controller' => 'App\\Controller\\PerfilController::edit'], ['id'], null, null, false, false, null]],
        1143 => [[['_route' => 'perfil_delete', '_controller' => 'App\\Controller\\PerfilController::delete'], ['id'], null, null, false, false, null]],
        1212 => [[['_route' => 'editarServicioshabitaciones', '_controller' => 'App\\Controller\\ServicioshabitacionesController::services'], ['roomid'], null, null, false, true, null]],
        1238 => [[['_route' => 'servicios_show', '_controller' => 'App\\Controller\\ServiciosController::show'], ['id'], null, null, false, true, null]],
        1263 => [[['_route' => 'servicios_edit', '_controller' => 'App\\Controller\\ServiciosController::edit'], ['id'], null, null, false, false, null]],
        1278 => [[['_route' => 'servicios_delete', '_controller' => 'App\\Controller\\ServiciosController::delete'], ['id'], null, null, false, false, null]],
        1319 => [[['_route' => 'servicioshabitaciones_show', '_controller' => 'App\\Controller\\ServicioshabitacionesController::show'], ['id'], null, null, false, true, null]],
        1344 => [[['_route' => 'servicioshabitaciones_edit', '_controller' => 'App\\Controller\\ServicioshabitacionesController::edit'], ['id'], null, null, false, false, null]],
        1359 => [[['_route' => 'servicioshabitaciones_delete', '_controller' => 'App\\Controller\\ServicioshabitacionesController::delete'], ['id'], null, null, false, false, null]],
        1410 => [[['_route' => 'eliminarMultimedia', '_controller' => 'App\\Controller\\MultimediaController::deletePicture'], ['pictureid', 'roomid'], null, null, false, true, null]],
        1427 => [[['_route' => 'habitacionMultimedia', '_controller' => 'App\\Controller\\MultimediaController::room'], ['roomid'], null, null, false, true, null]],
        1441 => [[['_route' => 'multimedia_index', '_controller' => 'App\\Controller\\MultimediaController::index'], [], null, null, false, false, null]],
        1453 => [[['_route' => 'multimedia_new', '_controller' => 'App\\Controller\\MultimediaController::new'], [], null, null, false, false, null]],
        1475 => [[['_route' => 'multimedia_show', '_controller' => 'App\\Controller\\MultimediaController::show'], ['id'], null, null, false, true, null]],
        1500 => [[['_route' => 'multimedia_edit', '_controller' => 'App\\Controller\\MultimediaController::edit'], ['id'], null, null, false, false, null]],
        1515 => [[['_route' => 'multimedia_delete', '_controller' => 'App\\Controller\\MultimediaController::delete'], ['id'], null, null, false, false, null]],
        1555 => [[['_route' => 'clientes_show', '_controller' => 'App\\Controller\\ClientesController::show'], ['id'], null, null, false, true, null]],
        1580 => [[['_route' => 'clientes_edit', '_controller' => 'App\\Controller\\ClientesController::edit'], ['id'], null, null, false, false, null]],
        1595 => [[['_route' => 'clientes_delete', '_controller' => 'App\\Controller\\ClientesController::delete'], ['id'], null, null, false, false, null]],
        1642 => [[['_route' => 'comentarioshospedaje_show', '_controller' => 'App\\Controller\\ComentarioshospedajeController::show'], ['id'], null, null, false, true, null]],
        1667 => [[['_route' => 'comentarioshospedaje_edit', '_controller' => 'App\\Controller\\ComentarioshospedajeController::edit'], ['id'], null, null, false, false, null]],
        1682 => [[['_route' => 'comentarioshospedaje_delete', '_controller' => 'App\\Controller\\ComentarioshospedajeController::delete'], ['id'], null, null, false, false, null]],
        1725 => [[['_route' => 'tipohospedaje_show', '_controller' => 'App\\Controller\\TipohospedajeController::show'], ['id'], null, null, false, true, null]],
        1750 => [[['_route' => 'tipohospedaje_edit', '_controller' => 'App\\Controller\\TipohospedajeController::edit'], ['id'], null, null, false, false, null]],
        1765 => [
            [['_route' => 'tipohospedaje_delete', '_controller' => 'App\\Controller\\TipohospedajeController::delete'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
