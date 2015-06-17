<?php

require __DIR__.'/../vendor/autoload.php';

$request = \Hades\Http\Request::create();

$router = new \Hades\Route\Manager();

$response = $router->dispatch($request);

$response->send();