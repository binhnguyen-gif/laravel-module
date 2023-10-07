<?php
use Modules\Blog\Http\Controllers\Admin\CategoryController;
use Modules\Blog\Http\Controllers\Admin\PostController;
use Modules\Blog\Http\Controllers\Admin\PageController;

Route::prefix('blog')->middleware(['web', 'admin.auth'])->group(function () {

    Route::prefix('category')->group(function () {
        Route::get('', [CategoryController::class, 'index'])
            ->name('blog.admin.category.index')
            ->middleware('admin.can:blog.admin.category.index');

        Route::get('/create', [CategoryController::class, 'create'])
            ->name('blog.admin.category.create')
            ->middleware('admin.can:blog.admin.category.create');

        Route::get('{id}', [CategoryController::class, 'edit'])
            ->name('blog.admin.category.edit')
            ->middleware('admin.can:blog.admin.category.edit');

        Route::post('', [CategoryController::class, 'store'])
            ->name('blog.admin.category.store')
            ->middleware('admin.can:blog.admin.category.store');

        Route::put('{id}/update', [CategoryController::class, 'update'])
            ->name('blog.admin.category.update')
            ->middleware('admin.can:blog.admin.category.update');

        Route::delete('{id}/destroy', [CategoryController::class, 'destroy'])
            ->name('blog.admin.category.destroy')
            ->middleware('admin.can:blog.admin.category.destroy');
    });

    Route::prefix('post')->group(function (){
        Route::get('', [PostController::class, 'index'])
            ->name('blog.admin.post.index')
            ->middleware('admin.can:blog.admin.post.index');

        Route::get('/create', [PostController::class, 'create'])
            ->name('blog.admin.post.create')
            ->middleware('admin.can:blog.admin.post.create');

        Route::get('{id}', [PostController::class, 'edit'])
            ->name('blog.admin.post.edit')
            ->middleware('admin.can:blog.admin.post.edit');

        Route::post('', [PostController::class, 'store'])
            ->name('blog.admin.post.store')
            ->middleware('admin.can:blog.admin.post.store');

        Route::put('{id}/update', [PostController::class, 'update'])
            ->name('blog.admin.post.update')
            ->middleware('admin.can:blog.admin.post.update');

        Route::delete('{id}/destroy', [PostController::class, 'destroy'])
            ->name('blog.admin.post.destroy')
            ->middleware('admin.can:blog.admin.post.destroy');

    });

});
