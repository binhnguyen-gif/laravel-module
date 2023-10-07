<?php

use Modules\Contact\Http\Controllers\Admin\ContactController;

Route::prefix('contact')->middleware(['web', 'admin.auth'])->group(function () {
    Route::get('', [ContactController::class, 'index'])
        ->name('contact.admin.index')
        ->middleware('admin.can:contact.admin.index');

    Route::get('/create', [ContactController::class, 'create'])
        ->name('contact.admin.create')
        ->middleware('admin.can:contact.admin.create');

    Route::get('{id}/edit', [ContactController::class, 'edit'])
        ->name('contact.admin.edit')
        ->middleware('admin.can:contact.admin.edit');

    Route::post('', [ContactController::class, 'store'])
        ->name('contact.admin.store')
        ->middleware('admin.can:contact.admin.store');

    Route::put('{id}/update', [ContactController::class, 'update'])
        ->name('contact.admin.update')
        ->middleware('admin.can:contact.admin.update');

    Route::delete('{id}/destroy', [ContactController::class, 'destroy'])
        ->name('contact.admin.destroy')
        ->middleware('admin.can:contact.admin.destroy');
});
