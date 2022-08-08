<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\GeneralRequest as GeneralRequest;


class Category extends \Illuminate\Database\Eloquent\Model
{
    public static function getCategories() {
        return DB::table('category')
            ->selectRaw("category.name")
            ->get();
    }
    public static function getCategoryId() {
        $categoryIdQuery = DB::table('category')
            ->selectRaw('category.id')
            ->where('category.name','=',GeneralRequest::getCategoryNameFromRequest())
            ->first();
        return $categoryIdQuery->id;
    }
}
