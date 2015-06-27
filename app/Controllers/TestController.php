<?php

namespace App\Controllers;

class TestController extends \Hades\Mvc\Controller
{

    public function test($request)
    {
        $data = ['test' => 1];
        return \JsonResponse::make($data);
    }

    public function db($request)
    {
        // create one
        $user = new \UserModel();
        $user->id = 1;
        $user->name = "yejianfeng";
        $user->created_at = 123456;
        $user->save();

        // find one
        $user = \UserDao::find(1);

        // create one
        $user = new \UserModel();
        $user->id = 2;
        $user->name = "yejianfeng";
        $user->created_at = 123456;
        $user->save();

        //find many
        $users = \UserDao::finds([1,2]);

        // find pk 2
        $user = $users->find(2);

        // update
        $user->name = "yajianfeng2";
        $user->save();

        // update 2
        $user->update(['name' => 'yejianfeng']);

        // UserDao get
        $users = \UserDao::get(['name' => 'yejianfeng']);

        $user = $users->find(2);
        $user->delete();

        \UserDao::delete(['name' => 'yejianfeng']);

        return \JsonResponse::make(user);
    }
}
