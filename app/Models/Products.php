<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    use HasFactory;

    public function getProd() {
        $products = DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->selectRaw('category.name as categorie,products.id,products.name,products.price,products.stock,products.sku')
            ->get();
        return $products;
    }
}
