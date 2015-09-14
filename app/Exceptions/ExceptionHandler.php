<?php

namespace App\Exceptions;

use Hades\Exception\ExceptionHandler as BaseHander;

class ExceptionHandler extends BaseHander
{
    public function renderHttp()
    {
        
        return \RedirectResponse::make('/login/index');
    }

    public function renderConsole()
    {

    }
}
