<?php

use Illuminate\Support\Facades\Route;

/*
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
//    return view('welcome');
//});

//use Modules\Core\Http\Controllers\Web\UrlRewriteController;
//
//Route::fallback(UrlRewriteController::class);


use Modules\Core\Http\Controllers\Web\UrlRewriteController;
use App\Http\Controllers\HomeController;
Route::get('/', function (){
    return redirect()->route('home', []);
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::fallback(UrlRewriteController::class);
