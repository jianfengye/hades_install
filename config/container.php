<?php

return [
    // this class is 
    'bind' => [
        'Route' => '\Hades\Route\Manager',
    ],

    'singleton' => [
        'Request' => '\Hades\Http\Request',
        'JsonResponse' => '\Hades\Http\Response\JsonResponse',
        'HtmlResponse' => '\Hades\Http\Response\HtmlResponse',
    ],
];