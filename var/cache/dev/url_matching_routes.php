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
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/staff' => [[['_route' => 'app_staff', '_controller' => 'App\\Controller\\DashboardController::staff'], null, null, null, false, false, null]],
        '/eventsback' => [[['_route' => 'app_eventsBack', '_controller' => 'App\\Controller\\DashboardController::eventsBack'], null, null, null, false, false, null]],
        '/logisticsback' => [[['_route' => 'app_logisticsBack', '_controller' => 'App\\Controller\\DashboardController::logisticsBack'], null, null, null, false, false, null]],
        '/complaintsback' => [[['_route' => 'app_complaintsBack', '_controller' => 'App\\Controller\\DashboardController::complaintsBack'], null, null, null, false, false, null]],
        '/organizersback' => [[['_route' => 'app_organizersBack', '_controller' => 'App\\Controller\\DashboardController::organizersBack'], null, null, null, false, false, null]],
        '/offersback' => [[['_route' => 'app_offersBack', '_controller' => 'App\\Controller\\DashboardController::offersBack'], null, null, null, false, false, null]],
        '/profileBack' => [[['_route' => 'app_profileBack', '_controller' => 'App\\Controller\\DashboardController::profileBack'], null, null, null, false, false, null]],
        '/logout' => [
            [['_route' => 'app_logoutBack', '_controller' => 'App\\Controller\\DashboardController::logoutBack'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\HomeController::logout'], null, ['GET' => 0], null, false, false, null],
        ],
        '/forums' => [[['_route' => 'app_forums', '_controller' => 'App\\Controller\\ForumController::index'], null, ['GET' => 0], null, false, false, null]],
        '/add' => [[['_route' => 'app_forums_new', '_controller' => 'App\\Controller\\ForumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/edit' => [[['_route' => 'app_forum_edit', '_controller' => 'App\\Controller\\ForumController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forum/traduire' => [[['_route' => 'app_traduire_texte', '_controller' => 'App\\Controller\\ForumController::traduireTexte'], null, null, null, false, false, null]],
        '/forumsback' => [[['_route' => 'app_forumsBack', '_controller' => 'App\\Controller\\ForumsBackController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'app_events', '_controller' => 'App\\Controller\\HomeController::events'], null, null, null, false, false, null]],
        '/reservations' => [[['_route' => 'app_reservations', '_controller' => 'App\\Controller\\HomeController::reservations'], null, null, null, false, false, null]],
        '/complaints' => [[['_route' => 'app_complaints', '_controller' => 'App\\Controller\\HomeController::complaints'], null, null, null, false, false, null]],
        '/organizers' => [[['_route' => 'app_organizers', '_controller' => 'App\\Controller\\HomeController::organizers'], null, null, null, false, false, null]],
        '/logistics' => [[['_route' => 'app_logistics', '_controller' => 'App\\Controller\\HomeController::logistics'], null, null, null, false, false, null]],
        '/marketplace' => [[['_route' => 'app_marketplace', '_controller' => 'App\\Controller\\HomeController::marketplace'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\HomeController::profile'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\SignupController::signup'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\SignupController::getUsers'], null, ['GET' => 0], null, false, false, null]],
        '/users/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\SignupController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/comment/(?'
                    .'|add/([^/]++)(*:226)'
                    .'|delete/([^/]++)(*:249)'
                    .'|edit/([^/]++)(*:270)'
                .')'
                .'|/forum/(?'
                    .'|image/([^/]++)(*:303)'
                    .'|delete/([^/]++)(*:326)'
                    .'|translate/([^/]++)(*:352)'
                .')'
                .'|/reaction/(?'
                    .'|like/([^/]++)(*:387)'
                    .'|dislike/([^/]++)(*:411)'
                .')'
                .'|/users/([^/]++)(?'
                    .'|(*:438)'
                    .'|/edit(*:451)'
                    .'|(*:459)'
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
        226 => [[['_route' => 'app_comment_add', '_controller' => 'App\\Controller\\CommentController::addComment'], ['forumId'], ['POST' => 0], null, false, true, null]],
        249 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        270 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::editComment'], ['id'], ['POST' => 0], null, false, true, null]],
        303 => [[['_route' => 'app_forum_image', '_controller' => 'App\\Controller\\ForumController::getImage'], ['id'], null, null, false, true, null]],
        326 => [[['_route' => 'app_forum_delete', '_controller' => 'App\\Controller\\ForumController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        352 => [[['_route' => 'forum_translate', '_controller' => 'App\\Controller\\ForumController::translateForum'], ['id'], ['POST' => 0], null, false, true, null]],
        387 => [[['_route' => 'reaction_like', '_controller' => 'App\\Controller\\ReactionController::like'], ['id'], ['POST' => 0], null, false, true, null]],
        411 => [[['_route' => 'reaction_dislike', '_controller' => 'App\\Controller\\ReactionController::dislike'], ['id'], ['POST' => 0], null, false, true, null]],
        438 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\SignupController::show'], ['id_user'], ['GET' => 0], null, false, true, null]],
        451 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\SignupController::edit'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        459 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\SignupController::delete'], ['id_user'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
