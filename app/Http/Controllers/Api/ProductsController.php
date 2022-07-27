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
//
//    public function store(ProductsRequest $request): ProductResource
//    {
//        $product = Products::create($request->validated());
//
//        return new ProductResource($product);
//    }
//
//
//    public function show(Products $product): ProductResource
//    {
//        return new ProductResource($product);
//    }
//
//    public function update(ProductsRequest $request, Products $product): ProductResource
//    {
//        $product->update($request->validated());
//
//        return new ProductResource($product);
//    }
//
//
//    public function destroy(Products $product)
//    {
//        $product->delete();
//
//        return response()->noContent();
//    }

    public function showProducts(): \Illuminate\Support\Collection
    {
        $products = DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->selectRaw('category.name as cat_name,products.id,products.name,products.price,products.stock,products.sku')
            ->get();
        return collect($products);
    }


}
