<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'send_postcard' => [[], ['_controller' => 'App\\Controller\\SendPostcardController::index'], [], [['text', '/sendPostcard']], [], [], []],
    'submit_postcard' => [[], ['_controller' => 'App\\Controller\\SendPostcardController::submitData'], [], [['text', '/sendPostcard']], [], [], []],
    'index' => [[], ['route' => 'send_postcard', 'permanent' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], [], [['text', '/']], [], [], []],
];