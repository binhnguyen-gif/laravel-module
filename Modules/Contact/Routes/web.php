<?php

use Modules\Contact\Http\Controllers\Web\ContactController;

Route::prefix('contact')->group(function() {
    Route::post('', [ContactController::class, 'store'])
    ->name('contact.web.post');
});
