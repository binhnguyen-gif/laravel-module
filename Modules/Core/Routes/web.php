<?php
use Modules\Core\Http\Controllers\Web\SitemapController;
Route::get('sitemap.xml', [SitemapController::class, 'generate']);
