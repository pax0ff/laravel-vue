<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products as ProductsModel;
class ProductController extends Controller
{
    public static function getAllProducts() {
        return ProductsModel::getProductsData();
    }

    public static function getProduct() {
        return ProductsModel::getProduct();
    }

    public static function getAllProductsFromCategory() {
        return ProductsModel::getProductByCategory();
    }

    public static function saveProduct() {
        //method for saving product after edit
    }

    public static function deleteProduct() {
        //method for delete the selected product
    }

}
