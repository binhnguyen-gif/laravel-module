<?php
use Modules\Media\Http\Controllers\Admin\MediaController;

Route::middleware(['web', 'admin.auth'])->group(function (){
    Route::prefix('media')->group(function (){
        Route::get('/', [MediaController::class, 'index'])->name('core.admin.media.index');
        Route::post('', [MediaController::class, 'store'])->name('core.admin.media.store');

        Route::post('/upload', [MediaController::class, 'storeWithEditor'])
            ->name('core.admin.media.upload.api');
    });
});
