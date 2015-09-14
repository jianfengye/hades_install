<?php

namespace App\Middlewares;

class LogMiddleware
{
    public function handle($request, $next)
    {
        return $next($request);
    }
}
