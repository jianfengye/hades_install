<?php

require __DIR__.'/../vendor/autoload.php';

global $container;

$container = require __DIR__.'/../app/bootstrap.php';

$request = $container->make('Request');

$response = \Route::dispatch($request);

$response->send();