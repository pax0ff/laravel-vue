<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use \App\Http\Requests\GeneralRequest as GeneralRequest;
use App\Models\Category as CategoryModel;
use Faker;

class Products extends Model
{
    /**
     * Run the migrations.
     *
     * @return \Faker\Generator
     */
    private static function initFaker(): \Faker\Generator
    {
        return Faker\Factory::create();

    }
    private function setProductName(): string
    {
        return $this->initFaker()->bothify('S????');
    }

    private function setProductCategory(): int
    {
        return rand(1,2);
    }

    private function setProductSKU(): string
    {
        return $this->initFaker()->bothify('SKU####');
    }

    private function setProductPrice(): int
    {
        return rand(1,150);
    }

    private function setProductStock(): int
    {
        return rand(1,10);
    }

    private function setProductCreated() {

        return date('Y-m-d H:i:s');
    }

    private function setProductUpdated() {

        return date('Y-m-d H:i:s');
    }

    private function setProductImage(): string
    {
        return 'https://picsum.photos/200/300';
    }

    private function setProductCurrency(): string
    {
        return 'lei';
    }

    private function setProductDescription(): string {
        return $this->initFaker()->text(30);
    }

    public static function getProductsData(): \Illuminate\Support\Collection
    {
        return DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->selectRaw('category.name as categorie,products.id,products.name,products.price,products.stock,products.sku,products.image')
            ->get();
    }

    public static function getProduct(): \Illuminate\Support\Collection
    {
        return DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->selectRaw('category.name as categorie,products.id,products.name,products.price,products.stock,products.sku,products.image,products.description,products.currency')
            ->where('products.id','=', GeneralRequest::getProductIdFromRequest())
            ->get();

    }

    public static function getProductByCategory(): \Illuminate\Support\Collection
    {
        return DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->selectRaw('category.name as categorie,category.id,products.id,products.name,products.price,products.stock,products.sku,products.image,products.description,products.currency')
            ->where('products.category_id','=', CategoryModel::getCategoryId())
            ->get();
    }


    public static function addNewProduct(): bool
    {
        return DB::table('products')->insert(array(
            'id'=> 4,
            'name'=> (new Products)->setProductName(),
            'sku'=>(new Products)->setProductSKU(),
            'category_id'=>(new Products)->setProductCategory(),
            'price'=>(new Products)->setProductPrice(),
            'stock'=>(new Products)->setProductStock(),
            'created_at'=>(new Products)->setProductCreated(),
            'updated_at'=>(new Products)->setProductUpdated(),
            'image'=>(new Products)->setProductImage(),
            'description'=>(new Products)->setProductDescription(),
            'currency'=>(new Products)->setProductCurrency()
        ));
    }
}
