<?php

// include container
$app = new \Hades\Container\Container();

$app->bind('Request', '\Hades\Http\Request');
$app->singleton('Router', '\Hades\Route\Manager');

return $app;