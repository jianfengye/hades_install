<?php

return [
    // this class is
    'bind' => [
        'Route' => '\Hades\Route\Manager',
    ],

    'singleton' => [
        'Request' => '\Hades\Http\Request',
        'Response' => '\Hades\Http\Response',
        'JsonResponse' => '\Hades\Http\Response\JsonResponse',
        'HtmlResponse' => '\Hades\Http\Response\HtmlResponse',
        'RedirectResponse' => '\Hades\Http\Response\RedirectResponse',
        'RewriteResponse' => '\App\Responses\RewriteResponse',
        'Session' => '\Hades\Session\Session',
        'Config' => '\Hades\Config\Config',
        'Logger' => '\Hades\Log\Logger',
    ],
];
