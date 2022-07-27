<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    use HasFactory;

    public function getProductsData() {
        $products = DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->selectRaw('category.name as categorie,products.id,products.name,products.price,products.stock,products.sku,products.image')
            ->get();
        return $products;
    }

    public function getProduct($id) {
//        $product = DB::table('products')
//            ->leftJoin('category','category.id','=','products.category_id')
//            ->selectRaw('category.name as categorie,products.id,products.name,products.price,products.stock,products.sku,products.image')
//            ->where('products.id','=','1')
//            ->toSql();
//        return $product;
        print_r($id);
    }
}
