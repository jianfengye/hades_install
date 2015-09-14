<?php

namespace App\Responses;

class RewriteResponse
{
    public static function make($message, $redirect = '')
    {
        if (empty($redirect)) {
            return \HtmlResponse::make('common/alert', ['message' => $message]);
        }
        return \HtmlResponse::make('common/redirect', ['message' => $message, 'redirect' => $redirect]);
    }
}
