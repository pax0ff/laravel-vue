<?php

use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products',function() {
    return (new App\Models\Products)->getProductsData();
});
Route::get('/products/{id}',function(){
    return (new App\Models\Products)->getProduct();
});

Route::get('/products/category/{categ}',function(){
    return (new App\Models\Products)->getProductByCategory();
});
/* Cart - get all products from cart */
Route::get('cart',function() {

});
Route::post('users/login',function() {
    return ;
});

Route::post('users/register',function () {
    dd("register");
});
Route::apiResource('companies', \App\Http\Controllers\Api\CompanyController::class);
Route::apiResource('users',\App\Http\Controllers\Api\UsersController::class);
//Route::apiResource('products',\App\Http\Controllers\Api\ProductsController::class);



