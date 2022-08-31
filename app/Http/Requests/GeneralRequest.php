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
        return request()->all()[0];
    }

    public static function getUserDataFromRequest(): array
    {
        return array([
            'name' => request('name'),
            'email'=>request('email'),
            'password'=>request('password'),
            'created_at'=>date('Y-m-d h:m:s'),
            'updated_at'=>date('Y-m-d h:m:s')
        ]);
    }

    public static function getUserLoginDataFromRequest(): array {
        return request()->only('email','password');
    }

    public static function getPostIdFromRequest(): int {
        return intval(request('id'));
    }
    public static function getPostCategoryNameFromRequest() {
        return request('category');
    }

}
