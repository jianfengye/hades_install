<?php

namespace App\Responses;

class AjaxResponse extends \Hades\Http\Response\JsonResponse
{
    public static function make($data, $code = 0)
    {
        $data = [
            'code' => $code,
            'result' => $data
        ];

        return parent::make($data, 200);
    }
}
