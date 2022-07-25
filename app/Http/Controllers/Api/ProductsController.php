<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductsRequest;
use App\Http\Resources\ProductResource;
use App\Models\Products;


class ProductsController extends Controller
{

    public function index(): AnonymousResourceCollection
    {
        return Products::collection(Products::all());
    }


    public function store(ProductsRequest $request): ProductResource
    {
        $company = Products::create($request->validated());

        return new ProductResource($company);
    }


    public function show(Products $company): ProductResource
    {
        return new ProductResource($company);
    }

    public function update(ProductsRequest $request, Products $company): ProductResource
    {
        $company->update($request->validated());

        return new ProductResource($company);
    }


    public function destroy(Products $company)
    {
        $company->delete();

        return response()->noContent();
    }


}
