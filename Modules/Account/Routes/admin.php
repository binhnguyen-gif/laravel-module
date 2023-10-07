<?php
use \Modules\Account\Http\Controllers\Admin\AccountController;


Route::group(['prefix' => 'account', 'as' => 'account.admin.', 'middleware' => ['web', 'admin.auth']], function () {
    Route::get('', [AccountController::class, 'index'])
        ->name('index')
        ->middleware('admin.can:account.admin.index');

    Route::get('/create', [AccountController::class, 'create'])
        ->name('create')
        ->middleware('admin.can:account.admin.create');

    Route::get('{id}', [AccountController::class, 'edit'])
        ->name('edit')
        ->middleware('admin.can:account.admin.edit');

    Route::post('', [AccountController::class, 'store'])
        ->name('store')
        ->middleware('admin.can:account.admin.store');

    Route::put('{id}/update', [AccountController::class, 'update'])
        ->name('update')
        ->middleware('admin.can:account.admin.update');

    Route::delete('{id}/destroy', [AccountController::class, 'destroy'])
        ->name('destroy')
        ->middleware('admin.can:account.admin.destroy');
});
