<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../app/bootstrap.php';

$request = $app->make('Request');
$router = $app->make('Router');

$response = $router->dispatch($request);

$response->send();