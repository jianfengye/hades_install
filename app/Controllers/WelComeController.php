<?php

namespace App\Controllers;

class WelComeController extends \Hades\Mvc\Controller
{

    public function index()
    {
        return \HtmlResponse::make('welcome/index');
    }

    public function push($request)
    {

    }
}
