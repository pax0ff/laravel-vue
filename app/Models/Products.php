<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;


class Products extends Model
{
    use HasFactory;

    public function getProductsData(): \Illuminate\Support\Collection
    {
        return DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->selectRaw('category.name as categorie,products.id,products.name,products.price,products.stock,products.sku,products.image')
            ->get();
    }

    public function getProduct(): \Illuminate\Support\Collection
    {
        $productId = intval(request('id'));
        return DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->selectRaw('category.name as categorie,products.id,products.name,products.price,products.stock,products.sku,products.image,products.description,products.currency')
            ->where('products.id','=',$productId)
            ->get();
        //dd(gettype($userID));
    }

    public function getProductByCategory()
    {


        return DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->selectRaw('category.name as categorie,products.id,products.name,products.price,products.stock,products.sku,products.image,products.description,products.currency')
            ->where('products.category_id','=',1)
            ->get();
    }
}
