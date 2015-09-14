<?php

// include container
define('HADES_ROOT', __DIR__ . '/../');

require __DIR__.'/../vendor/autoload.php';

\Hades\Config\Config::setFolder(__DIR__.'/../config/');
\Hades\Log\Logger::setFolder(HADES_ROOT.'/storage/log/');
\Hades\Log\Logger::rotate(30);
\Hades\Config\Config::local(HADES_ROOT . '/.env.php');

$container = \Hades\Container\Container::instance();
$container->load(require(HADES_ROOT.'/config/container.php'));
\Hades\Dao\Register::load($container, require(HADES_ROOT . '/config/dao.php'));

/*
spl_autoload_register(function($class){
    if (\Hades\Container\Container::instance()->have($class)) {
        \Hades\Container\Container::instance()->alias($class);
    }
});
*/


set_exception_handler(function($exception){
    $handler =  new App\Exceptions\ExceptionHandler($exception);
    $response = $handler->render();
    $response->send();
});

require __DIR__. '/../config/route.php';
