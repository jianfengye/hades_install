<?php

namespace App\Controllers\TestController;

use Hades\Dao\Dao;

class TestController extends Hades\Mvc\Controller
{
    public function index($request)
    {
        $user = \UserDao::find(1);
        $user = \UserDao::connection('master')->find(1);

        $user = \UserDao::where('name', $name)->getOne();
        $users = \UserDao::where('sex', $sex)->getMany();

        $user = \UserDao::where('sex', $sex)->update('name', '男');
    }
}