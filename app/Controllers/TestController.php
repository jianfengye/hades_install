<?php

namespace App\Controllers\TestController;

class TestController extends Hades\Mvc\Controller
{

    public function test($request)
    {
        return \JsonResponse::make($data);
    }
}