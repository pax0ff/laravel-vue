<?php

use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Route;
use App\Models\User as UserModel;
use App\Models\Products as ProductsModel;
use App\Http\Controllers\UserController as UserController;
use App\Http\Controllers\ProductController as ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
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

//Users Routes

Route::get('/users',[UserController::class,'getUsers']);

Route::get('/users/{id}',function (){
    return UserController::getUser();
});
Route::delete('/users/{id}',function (){
    return UserController::delete();
});

Route::group(['middleware' => ['web']], function () {
    Route::post('/users/login',[LoginController::class,'login']);
    Route::get('/users/logout',[LogoutController::class,'perform']);
    Route::post('/users/register',[RegisterController::class,'register']);
});



Route::post('/users/save/{id}',function() {
    return UserController::save();
});

//End Users Routes




//Products Routes

Route::get('products',function() {
    return ProductController::getAllProducts();

});

Route::get('/products/{id}',function(){
    return ProductController::getProduct();
});

Route::get('/products/category/{categ}',function(){
    return ProductController::getAllProductsFromCategory();
});
//End Products Routes






/* Cart - get all products from cart */
Route::get('cart',function() {

});

Route::get('/products/add',function() {
    dd("adadsad");
});
Route::apiResource('companies', \App\Http\Controllers\Api\CompanyController::class);
//Route::apiResource('users',\App\Http\Controllers\Api\UsersController::class);
//Route::apiResource('products',\App\Http\Controllers\Api\ProductsController::class);



