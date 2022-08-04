<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Products extends Model
{
    use HasFactory;

    public function getProductsData(): \Illuminate\Support\Collection
    {
        $products = DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->selectRaw('category.name as categorie,products.id,products.name,products.price,products.stock,products.sku,products.image')
            ->get();
        return $products;
    }

    public function getProduct(): \Illuminate\Support\Collection
    {
        $userID = intval(request('id'));
        return DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->selectRaw('category.name as categorie,products.id,products.name,products.price,products.stock,products.sku,products.image,products.description,products.currency')
            ->where('products.id','=',$userID)
            ->get();
        //dd(gettype($userID));
    }
}
