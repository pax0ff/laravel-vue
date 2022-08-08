<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use \App\Http\Requests\GeneralRequest as GeneralRequest;
use App\Models\Category as CategoryModel;

class Products extends Model
{

    public function getProductsData(): \Illuminate\Support\Collection
    {
        return DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->selectRaw('category.name as categorie,products.id,products.name,products.price,products.stock,products.sku,products.image')
            ->get();
    }

    public function getProduct(): \Illuminate\Support\Collection
    {
        return DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->selectRaw('category.name as categorie,products.id,products.name,products.price,products.stock,products.sku,products.image,products.description,products.currency')
            ->where('products.id','=', GeneralRequest::getProductIdFromRequest())
            ->get();

    }

    public function getProductByCategory(): \Illuminate\Support\Collection
    {
        return DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->selectRaw('category.name as categorie,category.id,products.id,products.name,products.price,products.stock,products.sku,products.image,products.description,products.currency')
            ->where('products.category_id','=', CategoryModel::getCategoryId())
            ->get();
    }
}
