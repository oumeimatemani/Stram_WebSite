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
        '/admin' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/app_qui_sommes_nous' => [[['_route' => 'app_qui_sommes_nous', '_controller' => 'App\\Controller\\QuiSommesNousController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/algerie' => [[['_route' => 'app_contact_algerie', '_controller' => 'App\\Controller\\ContactController::algerie'], null, null, null, false, false, null]],
        '/senegal' => [[['_route' => 'app_contact_senegal', '_controller' => 'App\\Controller\\ContactController::senegal'], null, null, null, false, false, null]],
        '/niger' => [[['_route' => 'app_contact_niger', '_controller' => 'App\\Controller\\ContactController::niger'], null, null, null, false, false, null]],
        '/benin' => [[['_route' => 'app_contact_benin', '_controller' => 'App\\Controller\\ContactController::benin'], null, null, null, false, false, null]],
        '/carriere' => [[['_route' => 'carriere_index', '_controller' => 'App\\Controller\\CarriereController::index'], null, ['GET' => 0], null, false, false, null]],
        '/carriereAdmin' => [[['_route' => 'carriere_admin', '_controller' => 'App\\Controller\\CarriereController::carriereAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/candidature/submit' => [[['_route' => 'carriere_submit', '_controller' => 'App\\Controller\\CarriereController::submit'], null, ['POST' => 0], null, false, false, null]],
        '/offres' => [[['_route' => 'offres', '_controller' => 'App\\Controller\\OffresController::index'], null, ['GET' => 0], null, false, false, null]],
        '/clients' => [[['_route' => 'clients', '_controller' => 'App\\Controller\\ClientsController::index'], null, null, null, false, false, null]],
        '/clientsAdmin' => [[['_route' => 'clients_admin', '_controller' => 'App\\Controller\\ClientsController::clientsAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/ajouterClient' => [[['_route' => 'ajouterClient', '_controller' => 'App\\Controller\\ClientsController::ajouterClient'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/metiers' => [[['_route' => 'metiers', '_controller' => 'App\\Controller\\MetierController::index'], null, null, null, false, false, null]],
        '/ajouterMetier' => [[['_route' => 'ajouterMetier', '_controller' => 'App\\Controller\\MetierController::ajouterMetier'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/projets' => [[['_route' => 'projets', '_controller' => 'App\\Controller\\ProjetController::index'], null, null, null, false, false, null]],
        '/ajouterProjet' => [[['_route' => 'ajouterProjet', '_controller' => 'App\\Controller\\ProjetController::ajouterProjet'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/gestionAcceuil' => [[['_route' => 'acceuil', '_controller' => 'App\\Controller\\AcceuilController::gestionAcceuil'], null, null, null, false, false, null]],
        '/gestionStram' => [[['_route' => 'stram', '_controller' => 'App\\Controller\\StramController::gestionStram'], null, null, null, false, false, null]],
        '/gestionServices' => [[['_route' => 'services', '_controller' => 'App\\Controller\\ServicesController::gestionServices'], null, null, null, false, false, null]],
        '/gestionContact' => [
            [['_route' => 'gestion_Contact', '_controller' => 'App\\Controller\\GestionContactController::gestionContact'], null, null, null, false, false, null],
            [['_route' => 'gestion_contact', '_controller' => 'App\\Controller\\GestionContactController::gestionContact'], null, ['GET' => 0], null, false, false, null],
        ],
        '/modifierContactTunisie' => [[['_route' => 'modifier_contact_tunisie', '_controller' => 'App\\Controller\\GestionContactController::modifierContactTunisie'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/supprimerContactTunisie' => [[['_route' => 'supprimer_contact_tunisie', '_controller' => 'App\\Controller\\GestionContactController::supprimerContactTunisie'], null, ['GET' => 0], null, false, false, null]],
        '/modifierContactAlgerie' => [[['_route' => 'modifier_contact_algerie', '_controller' => 'App\\Controller\\GestionContactController::modifierContactAlgerie'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/supprimerContactAlgerie' => [[['_route' => 'supprimer_contact_algerie', '_controller' => 'App\\Controller\\GestionContactController::supprimerContactAlgerie'], null, ['GET' => 0], null, false, false, null]],
        '/sols/techniques' => [[['_route' => 'solsTechniques', '_controller' => 'App\\Controller\\SolsTechniquesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reparation' => [[['_route' => 'reparation', '_controller' => 'App\\Controller\\RéparationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/renforcement/chemisage/classique' => [[['_route' => 'RenforcementChemisageClassique', '_controller' => 'App\\Controller\\RenforcementChemisageClassiqueController::index'], null, ['GET' => 0], null, false, false, null]],
        '/renforcement/fibre/carbone' => [[['_route' => 'renforcementFibreCarbone', '_controller' => 'App\\Controller\\RenforcementFibreCarboneController::index'], null, ['GET' => 0], null, false, false, null]],
        '/Étanchéité' => [[['_route' => 'Étanchéité', '_controller' => 'App\\Controller\\ÉtanchéitéController::index'], null, ['GET' => 0], null, false, false, null]],
        '/Imperméabilisation' => [[['_route' => 'Imperméabilisation', '_controller' => 'App\\Controller\\ImperméabilisationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/traitement/joints' => [[['_route' => 'traitementJoints', '_controller' => 'App\\Controller\\TraitementJointsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/RevêtementTechnique' => [[['_route' => 'RevêtementTechnique', '_controller' => 'App\\Controller\\RevêtementTechniqueController::index'], null, ['GET' => 0], null, false, false, null]],
        '/TraitementFaçades' => [[['_route' => 'TraitementFaçades', '_controller' => 'App\\Controller\\TraitementFaçadesController::index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/modifier(?'
                    .'|Client/([^/]++)(*:196)'
                    .'|Metier/([^/]++)(*:219)'
                    .'|Projet/([^/]++)(*:242)'
                .')'
                .'|/suppression(?'
                    .'|Client/([^/]++)(*:281)'
                    .'|Metier/([^/]++)(*:304)'
                    .'|Projet/([^/]++)(*:327)'
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
        196 => [[['_route' => 'modifierClient', '_controller' => 'App\\Controller\\ClientsController::modifierClient'], ['id'], null, null, false, true, null]],
        219 => [[['_route' => 'modifierMetier', '_controller' => 'App\\Controller\\MetierController::modifierMetier'], ['id'], null, null, false, true, null]],
        242 => [[['_route' => 'modifierProjet', '_controller' => 'App\\Controller\\ProjetController::modifierProjet'], ['id'], null, null, false, true, null]],
        281 => [[['_route' => 'suppressionClient', '_controller' => 'App\\Controller\\ClientsController::suppressionClient'], ['id'], null, null, false, true, null]],
        304 => [[['_route' => 'suppressionMetier', '_controller' => 'App\\Controller\\MetierController::suppressionMetier'], ['id'], null, null, false, true, null]],
        327 => [
            [['_route' => 'suppressionProjet', '_controller' => 'App\\Controller\\ProjetController::suppressionProjet'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
