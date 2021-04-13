<?php

namespace App\API;

class ApiError
{
    public static function errorMessage($msg, $code){
        return[
            'data' => [
                'msg' => $msg,
                'code'=> $code
            ]
        ];
    }

}