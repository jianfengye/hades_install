<?php

// include container
$app = new \Hades\Container\Container();

$app->bind('Request', '\Hades\Http\Request');
$app->singleton('Route', '\Hades\Route\Manager');

// if class not exist, check Container
spl_autoload_register(function($contract) use ($app) {
    // TODO: here will create an unused class
    if ($app->have($class)) {
        return $app->make($contract);
    }
});

return $app;