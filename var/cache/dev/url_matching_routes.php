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
        '/staff' => [[['_route' => 'app_staff', '_controller' => 'App\\Controller\\DashboardController::staff'], null, ['GET' => 0], null, false, false, null]],
        '/logoutBack' => [[['_route' => 'app_logoutBack', '_controller' => 'App\\Controller\\DashboardController::logoutBack'], null, ['GET' => 0], null, false, false, null]],
        '/events' => [
            [['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null],
            [['_route' => 'app_events', '_controller' => 'App\\Controller\\HomeController::events'], null, null, null, false, false, null],
        ],
        '/eventnew' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/eventspersonalise' => [[['_route' => 'app_events_personalise', '_controller' => 'App\\Controller\\EventController::showPersonaliseEvents'], null, null, null, false, false, null]],
        '/eventsback' => [[['_route' => 'app_eventsBack', '_controller' => 'App\\Controller\\EventController::eventsBack'], null, null, null, false, false, null]],
        '/adminevents' => [[['_route' => 'app_event_index_admin', '_controller' => 'App\\Controller\\EventController::indexAdmin'], null, null, null, false, false, null]],
        '/newOff' => [[['_route' => 'app_event_newOff', '_controller' => 'App\\Controller\\EventController::newOff'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forums' => [[['_route' => 'app_forums', '_controller' => 'App\\Controller\\ForumController::index'], null, ['GET' => 0], null, false, false, null]],
        '/add' => [[['_route' => 'app_forums_new', '_controller' => 'App\\Controller\\ForumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/edit' => [[['_route' => 'app_forum_edit', '_controller' => 'App\\Controller\\ForumController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forum/traduire' => [[['_route' => 'app_traduire_texte', '_controller' => 'App\\Controller\\ForumController::traduireTexte'], null, null, null, false, false, null]],
        '/forumsback' => [[['_route' => 'app_forumsBack', '_controller' => 'App\\Controller\\ForumsBackController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/reservations' => [[['_route' => 'app_reservations', '_controller' => 'App\\Controller\\HomeController::reservations'], null, null, null, false, false, null]],
        '/marketplace' => [[['_route' => 'app_marketplace', '_controller' => 'App\\Controller\\HomeController::marketplace'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\HomeController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/compare-faces' => [[['_route' => 'compare_faces', '_controller' => 'App\\Controller\\LoginController::compareFaces'], null, ['POST' => 0], null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\LoginController::forgotPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/verify-code' => [[['_route' => 'app_verify_code', '_controller' => 'App\\Controller\\LoginController::verifyCode'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\LoginController::resetPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\LoginController::profile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/update-profile' => [[['_route' => 'app_update_profile', '_controller' => 'App\\Controller\\LoginController::updateProfile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/confirm-delete-account' => [[['_route' => 'app_confirm_delete_account', '_controller' => 'App\\Controller\\LoginController::confirmDeleteAccount'], null, ['GET' => 0], null, false, false, null]],
        '/delete-account' => [[['_route' => 'app_delete_account', '_controller' => 'App\\Controller\\LoginController::deleteAccount'], null, ['POST' => 0], null, false, false, null]],
        '/profileBack' => [[['_route' => 'app_update_profile_back', '_controller' => 'App\\Controller\\LoginController::updateProfileBack'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/delete-account-back' => [[['_route' => 'app_delete_account_back', '_controller' => 'App\\Controller\\LoginController::deleteAccountBack'], null, ['POST' => 0], null, false, false, null]],
        '/staff/search' => [[['_route' => 'app_staff_search', '_controller' => 'App\\Controller\\LoginController::search'], null, ['GET' => 0], null, false, false, null]],
        '/staff/filter' => [[['_route' => 'staff_filter', '_controller' => 'App\\Controller\\LoginController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/staff/export' => [[['_route' => 'staff_export', '_controller' => 'App\\Controller\\LoginController::export'], null, ['GET' => 0], null, false, false, null]],
        '/logistics' => [[['_route' => 'app_logistics', '_controller' => 'App\\Controller\\LogistiqueController::logistics'], null, null, null, false, false, null]],
        '/logisticsUpdate' => [[['_route' => 'app_logistic_update', '_controller' => 'App\\Controller\\LogistiqueController::updateLogistic'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logisticsback' => [[['_route' => 'app_logisticsBack', '_controller' => 'App\\Controller\\LogistiqueController::logisticsBack'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'app_shop', 'categoryId' => null, '_controller' => 'App\\Controller\\LogistiqueController::Show'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart_view', '_controller' => 'App\\Controller\\LogistiqueController::viewCart'], null, null, null, false, false, null]],
        '/cartempty' => [[['_route' => 'cart_empty', '_controller' => 'App\\Controller\\LogistiqueController::emptyCart'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'category_list', '_controller' => 'App\\Controller\\LogistiqueController::categoriesAll'], null, null, null, false, false, null]],
        '/categorynew' => [[['_route' => 'category_create', '_controller' => 'App\\Controller\\LogistiqueController::createCategory'], null, null, null, false, false, null]],
        '/categoryedit' => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\LogistiqueController::updateCategory'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorydelete' => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\LogistiqueController::deleteCategory'], null, ['POST' => 0], null, false, false, null]],
        '/favorites' => [[['_route' => 'view_favorites', '_controller' => 'App\\Controller\\LogistiqueController::viewFavorites'], null, null, null, false, false, null]],
        '/favorites/count' => [[['_route' => 'favorites_count', '_controller' => 'App\\Controller\\LogistiqueController::getFavoritesCount'], null, null, null, false, false, null]],
        '/favorites/remove-all' => [[['_route' => 'favorites_remove_all', '_controller' => 'App\\Controller\\LogistiqueController::removeAllFavorites'], null, ['POST' => 0], null, false, false, null]],
        '/create-checkout-session' => [[['_route' => 'create_checkout_session', '_controller' => 'App\\Controller\\LogistiqueController::createCheckoutSession'], null, null, null, false, false, null]],
        '/payment-success' => [[['_route' => 'payment_success', '_controller' => 'App\\Controller\\LogistiqueController::paymentSuccess'], null, null, null, false, false, null]],
        '/payment-cash' => [[['_route' => 'payment_cash', '_controller' => 'App\\Controller\\LogistiqueController::paymentCash'], null, null, null, false, false, null]],
        '/download-transactions' => [[['_route' => 'download_transactions', '_controller' => 'App\\Controller\\LogistiqueController::downloadTransactions'], null, null, null, false, false, null]],
        '/offre/add' => [[['_route' => 'add_offre', '_controller' => 'App\\Controller\\OffreController::addOffre'], null, ['POST' => 0], null, false, false, null]],
        '/offre/generate-ai' => [[['_route' => 'generate_ai_description', '_controller' => 'App\\Controller\\OffreController::generateAiDescription'], null, ['POST' => 0], null, false, false, null]],
        '/offre/weather' => [[['_route' => 'weather_analysis', '_controller' => 'App\\Controller\\OffreController::weatherAnalysis'], null, ['POST' => 0], null, false, false, null]],
        '/consulterYourRequest' => [
            [['_route' => 'app_offers', '_controller' => 'App\\Controller\\OffreController::indexs'], null, null, null, false, false, null],
            [['_route' => 'app_ConsulterYourRequest', '_controller' => 'App\\Controller\\OrganisateurController::consulterOffres'], null, null, null, false, false, null],
        ],
        '/ModifyYourRequest' => [[['_route' => 'app_ModifyYourRequest', '_controller' => 'App\\Controller\\OffreController::modifierOffrePage'], null, null, null, false, false, null]],
        '/offersback' => [
            [['_route' => 'app_consulterOffreCoteAdmin', '_controller' => 'App\\Controller\\OffreController::consulterOffreAdmi'], null, null, null, false, false, null],
            [['_route' => 'app_offersBack', '_controller' => 'App\\Controller\\OrganisateurController::consulterOffreAdmin'], null, null, null, false, false, null],
        ],
        '/AfecterOffre' => [[['_route' => 'app_AfecterOffre', '_controller' => 'App\\Controller\\OffreController::timchiIlPageAfecter'], null, null, null, false, false, null]],
        '/statistique' => [[['_route' => 'app_statistique', '_controller' => 'App\\Controller\\OffreController::statistique'], null, null, null, false, false, null]],
        '/AfecterAIOffre' => [[['_route' => 'app_AfecterAIOffre', '_controller' => 'App\\Controller\\OffreController::affecterOrganisateurParIA'], null, ['POST' => 0], null, false, false, null]],
        '/AjouterOrganisateurBack' => [[['_route' => 'app_AjouterOrganisateurBack', '_controller' => 'App\\Controller\\OrganisateurController::redirAjoutORG'], null, null, null, false, false, null]],
        '/specialites' => [[['_route' => 'specialites_list', '_controller' => 'App\\Controller\\OrganisateurController::listSpecialites'], null, null, null, false, false, null]],
        '/specialite/add' => [[['_route' => 'specialite_add', '_controller' => 'App\\Controller\\OrganisateurController::addSpecialite'], null, ['POST' => 0], null, false, false, null]],
        '/specialite/delete' => [[['_route' => 'specialite_delete', '_controller' => 'App\\Controller\\OrganisateurController::deleteSpecialite'], null, ['POST' => 0], null, false, false, null]],
        '/organisateur/add' => [[['_route' => 'add_organisateur', '_controller' => 'App\\Controller\\OrganisateurController::addOrganisateur'], null, ['POST' => 0], null, false, false, null]],
        '/organizersback' => [[['_route' => 'app_organizersBack', '_controller' => 'App\\Controller\\OrganisateurController::afficherOrg'], null, null, null, false, false, null]],
        '/organizers' => [[['_route' => 'app_organizers', '_controller' => 'App\\Controller\\OrganisateurController::afficherOrgFront'], null, null, null, false, false, null]],
        '/modifierOrganisateur' => [[['_route' => 'app_modifierOrganisateur', '_controller' => 'App\\Controller\\OrganisateurController::modifierOrgPage'], null, ['POST' => 0], null, false, false, null]],
        '/send-message' => [[['_route' => 'send_message', '_controller' => 'App\\Controller\\OrganisateurController::sendMessage'], null, ['POST' => 0], null, false, false, null]],
        '/AddYourRequest' => [[['_route' => 'app_AddYourRequest', '_controller' => 'App\\Controller\\OrganisateurController::ajouterOffres'], null, null, null, false, false, null]],
        '/complaints' => [[['_route' => 'app_complaints', '_controller' => 'App\\Controller\\ReclamationController::complaints'], null, null, null, false, false, null]],
        '/show' => [[['_route' => 'app_reclamation_lister', '_controller' => 'App\\Controller\\ReclamationController::listReclamations'], null, null, null, false, false, null]],
        '/add_rec' => [[['_route' => 'app_reclamation_add', '_controller' => 'App\\Controller\\ReclamationController::add'], null, null, null, false, false, null]],
        '/edit_rec' => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/complaintsback' => [[['_route' => 'app_complaintsBack', '_controller' => 'App\\Controller\\ReclamationController::complaintsBack'], null, null, null, false, false, null]],
        '/showback' => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], null, null, null, false, false, null]],
        '/update_rec' => [[['_route' => 'reclamation_update_status', '_controller' => 'App\\Controller\\ReclamationController::updateStatus'], null, ['POST' => 0], null, false, false, null]],
        '/showr' => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], null, ['GET' => 0], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/adminreservations' => [[['_route' => 'app_reservation_list', '_controller' => 'App\\Controller\\ReservationController::list'], null, ['GET' => 0], null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\SignupController::signup'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\SignupController::getUsers'], null, ['GET' => 0], null, false, false, null]],
        '/users/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\SignupController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/validate-phone' => [[['_route' => 'validate_phone', '_controller' => 'App\\Controller\\SignupController::validatePhone'], null, ['POST' => 0], null, false, false, null]],
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
                .'|/c(?'
                    .'|omment/(?'
                        .'|add/([^/]++)(*:229)'
                        .'|delete/([^/]++)(*:252)'
                        .'|edit/([^/]++)(*:273)'
                    .')'
                    .'|art(?'
                        .'|add/([^/]++)(*:300)'
                        .'|Remove/([^/]++)(*:323)'
                    .')'
                .')'
                .'|/event/([^/]++)(?'
                    .'|(*:351)'
                    .'|/edit(*:364)'
                    .'|(*:372)'
                .')'
                .'|/f(?'
                    .'|orum/(?'
                        .'|image/([^/]++)(*:408)'
                        .'|delete/([^/]++)(*:431)'
                        .'|translate/([^/]++)(*:457)'
                    .')'
                    .'|avorites/(?'
                        .'|add/([^/]++)(*:490)'
                        .'|remove/([^/]++)(*:513)'
                        .'|check/([^/]++)(*:535)'
                    .')'
                .')'
                .'|/user(?'
                    .'|/toggle\\-block/([^/]++)(*:576)'
                    .'|s/([^/]++)(?'
                        .'|(*:597)'
                        .'|/edit(*:610)'
                        .'|(*:618)'
                    .')'
                .')'
                .'|/l(?'
                    .'|ogisticsDelete(?'
                        .'|/([^/]++)(*:659)'
                        .'|Back/([^/]++)(*:680)'
                    .')'
                    .'|ive/([^/]++)(*:701)'
                .')'
                .'|/o(?'
                    .'|ffre/(?'
                        .'|cancel/([^/]++)(*:738)'
                        .'|edit/([^/]++)(*:759)'
                        .'|delete/([^/]++)(*:782)'
                        .'|affecter/([^/]++)(*:807)'
                    .')'
                    .'|rganisateur/(?'
                        .'|delete/([^/]++)(*:846)'
                        .'|([^/]++)(*:862)'
                        .'|edit/([^/]++)(*:883)'
                    .')'
                .')'
                .'|/AffichetgeOrgOffreTraite/([^/]++)(*:927)'
                .'|/re(?'
                    .'|action/(?'
                        .'|like/([^/]++)(*:964)'
                        .'|dislike/([^/]++)(*:988)'
                    .')'
                    .'|ponse/add/([^/]++)(*:1015)'
                    .'|servation/(?'
                        .'|([^/]++)(?'
                            .'|(*:1048)'
                            .'|/edit(*:1062)'
                            .'|(*:1071)'
                        .')'
                        .'|event/([^/]++)/reserve(*:1103)'
                    .')'
                .')'
                .'|/delete_rec/([^/]++)(*:1134)'
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
        229 => [[['_route' => 'app_comment_add', '_controller' => 'App\\Controller\\CommentController::addComment'], ['forumId'], ['POST' => 0], null, false, true, null]],
        252 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        273 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::editComment'], ['id'], ['POST' => 0], null, false, true, null]],
        300 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\LogistiqueController::addToCart'], ['id'], null, null, false, true, null]],
        323 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\LogistiqueController::removeFromCart'], ['id'], null, null, false, true, null]],
        351 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        364 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['POST' => 0], null, false, false, null]],
        372 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        408 => [[['_route' => 'app_forum_image', '_controller' => 'App\\Controller\\ForumController::getImage'], ['id'], null, null, false, true, null]],
        431 => [[['_route' => 'app_forum_delete', '_controller' => 'App\\Controller\\ForumController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        457 => [[['_route' => 'forum_translate', '_controller' => 'App\\Controller\\ForumController::translateForum'], ['id'], ['POST' => 0], null, false, true, null]],
        490 => [[['_route' => 'add_to_favorites', '_controller' => 'App\\Controller\\LogistiqueController::addToFavorites'], ['id'], null, null, false, true, null]],
        513 => [[['_route' => 'remove_from_favorites', '_controller' => 'App\\Controller\\LogistiqueController::removeFromFavorites'], ['id'], null, null, false, true, null]],
        535 => [[['_route' => 'check_favorite', '_controller' => 'App\\Controller\\LogistiqueController::checkFavorite'], ['id'], null, null, false, true, null]],
        576 => [[['_route' => 'app_user_toggle_block', '_controller' => 'App\\Controller\\LoginController::toggleBlock'], ['id'], ['POST' => 0], null, false, true, null]],
        597 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\SignupController::show'], ['id_user'], ['GET' => 0], null, false, true, null]],
        610 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\SignupController::edit'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        618 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\SignupController::delete'], ['id_user'], ['POST' => 0], null, false, true, null]],
        659 => [[['_route' => 'app_logistic_delete', '_controller' => 'App\\Controller\\LogistiqueController::deleteLogistic'], ['id'], null, null, false, true, null]],
        680 => [[['_route' => 'app_logistic_delete_back', '_controller' => 'App\\Controller\\LogistiqueController::deleteLogisticBack'], ['id'], null, null, false, true, null]],
        701 => [[['_route' => 'app_live', '_controller' => 'App\\Controller\\LogistiqueController::showLive'], ['id'], ['GET' => 0], null, false, true, null]],
        738 => [[['_route' => 'cancel_offre', '_controller' => 'App\\Controller\\OffreController::cancelOffre'], ['id'], ['POST' => 0], null, false, true, null]],
        759 => [[['_route' => 'edit_offre', '_controller' => 'App\\Controller\\OffreController::editOffre'], ['id'], ['PUT' => 0], null, false, true, null]],
        782 => [[['_route' => 'delete_offre', '_controller' => 'App\\Controller\\OffreController::deleteoffreAdmin'], ['id'], ['POST' => 0], null, false, true, null]],
        807 => [[['_route' => 'app_offer_assign', '_controller' => 'App\\Controller\\OffreController::assignOrganizer'], ['id'], ['PUT' => 0], null, false, true, null]],
        846 => [[['_route' => 'delete_organisateur', '_controller' => 'App\\Controller\\OrganisateurController::deleteOrganisateur'], ['id'], ['DELETE' => 0], null, false, true, null]],
        862 => [[['_route' => 'app_organisateur_details', '_controller' => 'App\\Controller\\OrganisateurController::getOrganisateurDetails'], ['id'], ['GET' => 0], null, false, true, null]],
        883 => [[['_route' => 'edit_organisateur', '_controller' => 'App\\Controller\\OrganisateurController::editOrganisateur'], ['id'], ['PUT' => 0], null, false, true, null]],
        927 => [[['_route' => 'app_AffichetgeOrgOffreTraite_details', '_controller' => 'App\\Controller\\OffreController::getOrganisateurDetails'], ['id'], ['GET' => 0], null, false, true, null]],
        964 => [[['_route' => 'reaction_like', '_controller' => 'App\\Controller\\ReactionController::like'], ['id'], ['POST' => 0], null, false, true, null]],
        988 => [[['_route' => 'reaction_dislike', '_controller' => 'App\\Controller\\ReactionController::dislike'], ['id'], ['POST' => 0], null, false, true, null]],
        1015 => [[['_route' => 'reponse_add', '_controller' => 'App\\Controller\\ReponseController::addResponse'], ['id'], ['POST' => 0], null, false, true, null]],
        1048 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['idRes'], ['GET' => 0], null, false, true, null]],
        1062 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['idRes'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1071 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['idRes'], ['POST' => 0], null, false, true, null]],
        1103 => [[['_route' => 'app_reservation_create', '_controller' => 'App\\Controller\\ReservationController::create'], ['id'], ['POST' => 0], null, false, false, null]],
        1134 => [
            [['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
