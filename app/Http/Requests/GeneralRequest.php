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
}
