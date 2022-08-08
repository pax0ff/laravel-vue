<?php

use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Route;
use App\Models\User as UserModel;
use App\Models\Products as ProductsModel;

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
    return ProductsModel::getProductsData();

});
Route::get('/products/{id}',function(){
    return ProductsModel::getProduct();
});

Route::get('/products/category/{categ}',function(){
    return ProductsModel::getProductByCategory();
});
/* Cart - get all products from cart */
Route::get('cart',function() {

});
Route::post('users/login',function() {
    return ;
});

Route::post('users/register',function () {
    return UserModel::registerUser();
});
Route::apiResource('companies', \App\Http\Controllers\Api\CompanyController::class);
Route::apiResource('users',\App\Http\Controllers\Api\UsersController::class);
//Route::apiResource('products',\App\Http\Controllers\Api\ProductsController::class);



