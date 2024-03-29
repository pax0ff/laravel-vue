<?php

use Illuminate\Support\Facades\Route;

/*x
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('dashboard');
//});
//
//Route::get('/', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';

Route::get('/{any}', [\App\Http\Controllers\Main::class,'index'])
    ->where('any', '^(?!api).*$');
