<?php
use Modules\Page\Http\Controllers\Admin\PageController;

Route::middleware(['web', 'admin.auth'])->group(function (){
    Route::prefix('page')->group(function (){
        Route::get('', [PageController::class, 'index'])->name('core.admin.page.index');
        Route::get('/create', [PageController::class, 'create'])->name('core.admin.page.create');
        Route::get('{id}', [PageController::class, 'edit'])->name('core.admin.page.edit');
        Route::post('', [PageController::class, 'store'])->name('core.admin.page.store');
        Route::put('{id}/update', [PageController::class, 'update'])->name('core.admin.page.update');
        Route::delete('{id}/destroy', [PageController::class, 'destroy'])->name('core.admin.page.destroy');
    });


});
