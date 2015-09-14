<?php
require __DIR__.'/../app/bootstrap.php';

$app = \Hades\Container\Container::instance();

$request = $app->make('Request');

// if request is js or css
$pathinfo = pathinfo($request->uri());
if (isset($pathinfo['extension']) && in_array($pathinfo['extension'], ['js', 'css'])) {
    $response = new \Response();

    $response->setStatusCode(404);
    return $response->send();
}

$response = \Route::dispatch($request);

if ($response instanceof \Hades\Http\Response) {
    $response->send();
}
