<?php

use Hades\Route\Manager as Route;

Route::get('/login/index', '\App\Controllers\LoginController@index');
Route::post('/login/login', '\App\Controllers\LoginController@login');
Route::get('/login/logout', '\App\Controllers\LoginController@logout');

Route::group(['middleware' => ['\App\Middlewares\AuthMiddleware']], function(){

    Route::get('/welcome/index', '\App\Controllers\WelComeController@index');

});
