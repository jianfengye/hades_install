<?php

// include container
$app = new \Hades\Container\Container();

$container = require __DIR__.'/../config/container.php';

if (isset($container['bind'])) {
    foreach ($container['bind'] as $key => $value) {
        $app->bind($key, $value);
    }
}

if (isset($container['singleton'])) {
    foreach ($container['singleton'] as $key => $value) {
        $app->singleton($key, $value);
    }
}

require __DIR__. '/../config/route.php';

return $app;