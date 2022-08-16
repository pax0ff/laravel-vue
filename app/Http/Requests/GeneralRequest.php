<?php

namespace App\Http\Requests;

class GeneralRequest
{
    public static function getProductIdFromRequest(): int {
        return intval(request('id'));
    }

    public static function getCategoryNameFromRequest() {
        return request('categ');
    }

    public static function getUserIdFromRequest(): int {
        return intval(request('id'));
    }
    public static function getRequest()
    {
        $req = request()->all()[0];
        return $req['name'];
    }

}
