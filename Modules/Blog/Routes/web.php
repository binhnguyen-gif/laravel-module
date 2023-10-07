<?php

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
use Modules\Blog\Http\Controllers\Web\CategoryController;
use Modules\Blog\Http\Controllers\Web\PostController;

Route::prefix('blog')->group(function() {
    Route::get('/category/{id}', [CategoryController::class, 'show'])->name('blog.web.category.show');
    Route::get('/post/{id}', [PostController::class, 'show'])->name('blog.web.post.show');
});
