<?php

use Modules\Page\Http\Controllers\Web\PageController;

Route::prefix('page')->group(function() {
    Route::get('/{id}', [PageController::class, 'show'])
        ->name('page.web.show');
});
