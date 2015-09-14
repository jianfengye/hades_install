<?php

namespace App\Middlewares;

class AuthMiddleware
{
    public function handle($request, $next)
    {
        $myself = \Session::get('admin');
        \Logger::instance('session')->info('my session is:', array($myself));
        if (empty($myself)){
            return \RedirectResponse::make('/login/index');
        }

        $myself = unserialize($myself);
        // admin share
        \Response::share(compact('myself'));
        return $next($request);
    }
}
