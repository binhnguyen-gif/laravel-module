<?php
use Modules\Menu\Http\Controllers\Admin\MenuController;
use Modules\Menu\Http\Controllers\Admin\MenuItemController;

Route::middleware(['web', 'admin.auth'])->prefix('menu')->group(function (){
    Route::get('', [MenuController::class, 'index'])->name('menu.admin.menu.index');
    Route::get('/create', [MenuController::class, 'create'])->name('menu.admin.menu.create');
    Route::get('{id}', [MenuController::class, 'edit'])->name('menu.admin.menu.edit');
    Route::post('', [MenuController::class, 'store'])->name('menu.admin.menu.store');
    Route::put('{id}/update', [MenuController::class, 'update'])->name('menu.admin.menu.update');
    Route::delete('{id}/destroy', [MenuController::class, 'destroy'])->name('menu.admin.menu.destroy');

    Route::prefix('item')->group(function (){
        Route::get('', [MenuItemController::class, 'index'])->name('menu.admin.menu_item.index');
        Route::get('/create', [MenuItemController::class, 'create'])->name('menu.admin.menu_item.create');
        Route::get('{id}', [MenuItemController::class, 'edit'])->name('menu.admin.menu_item.edit');
        Route::post('', [MenuItemController::class, 'store'])->name('menu.admin.menu_item.store');
        Route::put('{id}/update', [MenuItemController::class, 'update'])->name('menu.admin.menu_item.update');
        Route::delete('{id}/destroy', [MenuItemController::class, 'destroy'])->name('menu.admin.menu_item.destroy');
        Route::post('update-tree', [MenuItemController::class, 'updateTree'])->name('menu.admin.menu_item.update-tree');
    });
});
