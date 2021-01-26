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
        '/category/index' => [[['_route' => 'categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/admin/category/new' => [[['_route' => 'category_create', '_controller' => 'App\\Controller\\CategorieController::category_edit'], null, null, null, false, false, null]],
        '/form/new' => [[['_route' => 'create', '_controller' => 'App\\Controller\\MesPoissonsController::form'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MesPoissonsController::home'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/site' => [[['_route' => 'site', '_controller' => 'App\\Controller\\SiteController::index'], null, null, null, false, false, null]],
        '/site/new' => [[['_route' => 'site_create', '_controller' => 'App\\Controller\\SiteController::create'], null, null, null, false, false, null]],
        '/site/test' => [[['_route' => 'site_test', '_controller' => 'App\\Controller\\SiteController::testJson'], null, null, null, false, false, null]],
        '/spot' => [[['_route' => 'spot', '_controller' => 'App\\Controller\\SpotController::index'], null, null, null, false, false, null]],
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
                .'|/admin/category/([^/]++)/edit(*:198)'
                .'|/index(?:/([^/]++))?(*:226)'
                .'|/form/([^/]++)/(?'
                    .'|edit(*:256)'
                    .'|show(*:268)'
                    .'|delete(*:282)'
                .')'
                .'|/espece/([^/]++)/love(*:312)'
                .'|/s(?'
                    .'|ite/([^/]++)/(?'
                        .'|edit(*:345)'
                        .'|show(*:357)'
                        .'|delete(*:371)'
                    .')'
                    .'|ortie/([^/]++)(?'
                        .'|(*:397)'
                        .'|/(?'
                            .'|new(*:412)'
                            .'|([^/]++)/edit(*:433)'
                            .'|show(*:445)'
                            .'|delete(*:459)'
                        .')'
                    .')'
                    .'|pot/([^/]++)/(?'
                        .'|new(*:488)'
                        .'|([^/]++)/edit(*:509)'
                    .')'
                .')'
                .'|/prise/([^/]++)/delete(*:541)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategorieController::category_edit'], ['id'], null, null, false, false, null]],
        226 => [[['_route' => 'mes_poissons', 'offset' => null, '_controller' => 'App\\Controller\\MesPoissonsController::index'], ['offset'], null, null, false, true, null]],
        256 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\MesPoissonsController::form'], ['id'], null, null, false, false, null]],
        268 => [[['_route' => 'show', '_controller' => 'App\\Controller\\MesPoissonsController::show'], ['id'], null, null, false, false, null]],
        282 => [[['_route' => 'espece_delete', '_controller' => 'App\\Controller\\MesPoissonsController::delete'], ['id'], null, null, false, false, null]],
        312 => [[['_route' => 'espece_love', '_controller' => 'App\\Controller\\MesPoissonsController::love'], ['id'], null, null, false, false, null]],
        345 => [[['_route' => 'site_edit', '_controller' => 'App\\Controller\\SiteController::create'], ['id'], null, null, false, false, null]],
        357 => [[['_route' => 'site_show', '_controller' => 'App\\Controller\\SiteController::show'], ['id'], null, null, false, false, null]],
        371 => [[['_route' => 'site_delete', '_controller' => 'App\\Controller\\SiteController::delete'], ['id'], null, null, false, false, null]],
        397 => [[['_route' => 'sortie', '_controller' => 'App\\Controller\\SortieController::index'], ['site_id'], null, null, false, true, null]],
        412 => [[['_route' => 'sortie_create', '_controller' => 'App\\Controller\\SortieController::create'], ['site_id'], null, null, false, false, null]],
        433 => [[['_route' => 'sortie_edit', '_controller' => 'App\\Controller\\SortieController::create'], ['site_id', 'id'], null, null, false, false, null]],
        445 => [[['_route' => 'sortie_show', '_controller' => 'App\\Controller\\SortieController::show'], ['id'], null, null, false, false, null]],
        459 => [[['_route' => 'sortie_delete', '_controller' => 'App\\Controller\\SortieController::sortieDelete'], ['id'], null, null, false, false, null]],
        488 => [[['_route' => 'spot_create', '_controller' => 'App\\Controller\\SpotController::create'], ['site_id'], null, null, false, false, null]],
        509 => [[['_route' => 'spot_edit', 'spot_id' => null, '_controller' => 'App\\Controller\\SpotController::create'], ['site_id', 'spot_id'], null, null, false, false, null]],
        541 => [
            [['_route' => 'prise_delete', '_controller' => 'App\\Controller\\SortieController::priseDelete'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
