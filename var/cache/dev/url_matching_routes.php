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
        '/admin' => [
            [['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_dashboard_index', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null],
        ],
        '/admin/admin/job_offers' => [[['_route' => 'app_admin_job_offer_index', '_controller' => 'App\\Controller\\AdminController::job_offer_index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/admin/job_applications' => [[['_route' => 'app_admin_job_applications_index', '_controller' => 'App\\Controller\\AdminController::job_applications_index'], null, ['GET' => 0], null, false, false, null]],
        '/candidate' => [[['_route' => 'app_candidate_index', '_controller' => 'App\\Controller\\CandidateController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client' => [[['_route' => 'app_client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'app_client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'show_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/company' => [[['_route' => 'show_company', '_controller' => 'App\\Controller\\HomeController::company'], null, null, null, false, false, null]],
        '/terms' => [[['_route' => 'terms_of_use', '_controller' => 'App\\Controller\\HomeController::terms'], null, null, null, false, false, null]],
        '/job/offer' => [[['_route' => 'app_job_offer_index', '_controller' => 'App\\Controller\\JobOfferController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/user/forgot-pass' => [[['_route' => 'forgotten_password', '_controller' => 'App\\Controller\\UserController::forgottenPassword'], null, null, null, false, false, null]],
        '/user/deconnexion' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        '/user/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/admin/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                    .'|(*:208)'
                .')'
                .'|/c(?'
                    .'|andidate(?'
                        .'|/(?'
                            .'|show/([^/]++)(*:250)'
                            .'|edit/([^/]++)(*:271)'
                            .'|([^/]++)(*:287)'
                        .')'
                        .'|s/new/([^/]++)(*:310)'
                    .')'
                    .'|lient/([^/]++)(?'
                        .'|(*:336)'
                        .'|/edit(*:349)'
                        .'|(*:357)'
                    .')'
                .')'
                .'|/job/offer/(?'
                    .'|edit(?:/(\\d+))?(*:396)'
                    .'|([^/]++)(*:412)'
                    .'|registration/([^/]++)(*:441)'
                    .'|([^/]++)(*:457)'
                .')'
                .'|/user/(?'
                    .'|oubli\\-pass/([^/]++)(*:495)'
                    .'|([^/]++)(?'
                        .'|(*:514)'
                        .'|/edit(*:527)'
                        .'|(*:535)'
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
        187 => [
            [['_route' => 'app_job_application_delete', '_controller' => 'App\\Controller\\AdminController::job_application_delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        200 => [[['_route' => 'app_admin_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'app_admin_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        250 => [[['_route' => 'app_candidate_show', '_controller' => 'App\\Controller\\CandidateController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        271 => [[['_route' => 'app_candidate_edit', '_controller' => 'App\\Controller\\CandidateController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        287 => [[['_route' => 'app_candidate_delete', '_controller' => 'App\\Controller\\CandidateController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        310 => [[['_route' => 'app_candidate_new', '_controller' => 'App\\Controller\\CandidateController::new'], ['id'], null, null, false, true, null]],
        336 => [[['_route' => 'app_client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [[['_route' => 'app_client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        396 => [[['_route' => 'app_job_offer_edit', 'id' => null, '_controller' => 'App\\Controller\\JobOfferController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        412 => [[['_route' => 'app_job_offer_show', '_controller' => 'App\\Controller\\JobOfferController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        441 => [[['_route' => 'app_job_offer_applicationRegister', '_controller' => 'App\\Controller\\JobOfferController::applicationRegister'], ['id'], ['GET' => 0], null, false, true, null]],
        457 => [[['_route' => 'app_job_offer_delete', '_controller' => 'App\\Controller\\JobOfferController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        495 => [[['_route' => 'reset_pass', '_controller' => 'App\\Controller\\UserController::resetPass'], ['token'], null, null, false, true, null]],
        514 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        527 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        535 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
