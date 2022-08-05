<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductsRequest;
use App\Http\Resources\ProductResource;
use App\Models\Products;
use Illuminate\Support\Facades\DB;


class ProductsController extends Controller
{

    public function index(): \Illuminate\Support\Collection
    {
        return (new \App\Models\Products)->getProductsData();
    }

    public function productsByCategory() {
        return (new \App\Models\Products)->getProductByCategory();
    }

}
