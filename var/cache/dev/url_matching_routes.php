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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/artist' => [[['_route' => 'app_artist_index', '_controller' => 'App\\Controller\\ArtistController::index'], null, ['GET' => 0], null, false, false, null]],
        '/artist/new' => [[['_route' => 'app_artist_new', '_controller' => 'App\\Controller\\ArtistController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/release' => [[['_route' => 'app_release_index', '_controller' => 'App\\Controller\\ReleaseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/release/new' => [[['_route' => 'app_release_new', '_controller' => 'App\\Controller\\ReleaseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/track' => [[['_route' => 'app_track_index', '_controller' => 'App\\Controller\\TrackController::index'], null, ['GET' => 0], null, false, false, null]],
        '/track/new' => [[['_route' => 'app_track_new', '_controller' => 'App\\Controller\\TrackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/artist/([^/]++)(?'
                    .'|(*:221)'
                    .'|/edit(*:234)'
                    .'|(*:242)'
                .')'
                .'|/release/([^/]++)(?'
                    .'|(*:271)'
                    .'|/(?'
                        .'|edit(*:287)'
                        .'|new\\-track(*:305)'
                    .')'
                    .'|(*:314)'
                .')'
                .'|/track/([^/]++)(?'
                    .'|(*:341)'
                    .'|/edit(*:354)'
                    .'|(*:362)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        221 => [[['_route' => 'app_artist_show', '_controller' => 'App\\Controller\\ArtistController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        234 => [[['_route' => 'app_artist_edit', '_controller' => 'App\\Controller\\ArtistController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [[['_route' => 'app_artist_delete', '_controller' => 'App\\Controller\\ArtistController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        271 => [[['_route' => 'app_release_show', '_controller' => 'App\\Controller\\ReleaseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        287 => [[['_route' => 'app_release_edit', '_controller' => 'App\\Controller\\ReleaseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        305 => [[['_route' => 'app_release_new_track', '_controller' => 'App\\Controller\\ReleaseController::newTrack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        314 => [[['_route' => 'app_release_delete', '_controller' => 'App\\Controller\\ReleaseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        341 => [[['_route' => 'app_track_show', '_controller' => 'App\\Controller\\TrackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'app_track_edit', '_controller' => 'App\\Controller\\TrackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        362 => [
            [['_route' => 'app_track_delete', '_controller' => 'App\\Controller\\TrackController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
