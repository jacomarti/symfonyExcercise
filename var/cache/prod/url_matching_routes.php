<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/sendPostcard' => [
            [['_route' => 'send_postcard', '_controller' => 'App\\Controller\\SendPostcardController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'submit_postcard', '_controller' => 'App\\Controller\\SendPostcardController::submitData'], null, ['POST' => 0], null, false, false, null],
        ],
        '/' => [[['_route' => 'index', 'route' => 'send_postcard', 'permanent' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
