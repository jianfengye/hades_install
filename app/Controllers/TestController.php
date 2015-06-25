<?php

namespace App\Controllers;

class TestController extends \Hades\Mvc\Controller
{

    public function test($request)
    {
        $data = ['test' => 1];
        return \JsonResponse::make($data);
    }
}