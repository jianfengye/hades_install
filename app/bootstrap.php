<?php

// include container
$app = new \Hades\Container\Container();

$container = require __DIR__.'/../config/container.php';
\Hades\Config\Config::setFolder(__DIR__.'/../config/';)

if (isset($container['bind'])) {
    foreach ($container['bind'] as $key => $value) {
        $app->bind($key, $value);
        class_alias($value, $key);
    }
}

if (isset($container['singleton'])) {
    foreach ($container['singleton'] as $key => $value) {
        $app->singleton($key, $value);
        class_alias($value, $key);
    }
}

spl_autoload_register(function($class){
    // if end by Dao
    if (substr($class, -3) == 'Dao') {
        class_alias('\Hades\Dao\Dao', $class);
        $table = \Hades\Utils\String::fromCamlCase(substr($class, 0, -3));
        \Hades\Dao\Dao::setTable($table);
    }

    if (substr($class, -5) == 'Model') {
        $table = \Hades\Utils\String::fromCamlCase(substr($class, 0, -5));
        $modelName = \Hades\Dao\DaoHelper::modelName($table);

        class_alias($modelName, $class);
        $modelName::setTable($table);
    }
});

require __DIR__. '/../config/route.php';

return $app;
