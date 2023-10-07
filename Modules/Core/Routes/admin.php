<?php
use Modules\Core\Http\Controllers\Auth\LoginController;
use Modules\Core\Http\Controllers\Admin\DashboardController;
use Modules\Core\Http\Controllers\Admin\ExampleController;
use Modules\Core\Http\Controllers\Admin\PermissionController;
use Modules\Core\Http\Controllers\Admin\UserController;
use Modules\Core\Http\Controllers\Admin\SettingController;


Route::middleware(['web'])->group(function ()
{

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('core.admin.login');
    Route::post('/login', [LoginController::class, 'login'])->name('core.admin.login.post');
    Route::get('/logout', [LoginController::class, 'logout'])->name('core.admin.login.logout');

});

Route::middleware(['web', 'admin.auth'])->group(function ()
{
    Route::get('/', [DashboardController::class, 'index'])->name('core.admin.dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('core.admin.login.profile');
    Route::put('/profile', [DashboardController::class, 'updateProfile'])->name('core.admin.login.profile.update');

    Route::prefix('user')->group(function ()
    {
        Route::get('', [UserController::class , 'index'])
            ->name('core.admin.user.index')
            ->middleware('admin.can:core.admin.user.index');

        Route::get('/create', [UserController::class, 'create'])
            ->name('core.admin.user.create')
            ->middleware('admin.can:core.admin.user.create');

        Route::get('{id}/edit', [UserController::class, 'edit'])
            ->name('core.admin.user.edit')
            ->middleware('admin.can:core.admin.user.edit');

        Route::post('', [UserController::class, 'store'])
            ->name('core.admin.user.store')
            ->middleware('admin.can:core.admin.user.store');

        Route::put('{id}/update', [UserController::class, 'update'])
            ->name('core.admin.user.update')
            ->middleware('admin.can:core.admin.user.update');

        Route::delete('{id}/destroy', [UserController::class, 'destroy'])
            ->name('core.admin.user.destroy')
            ->middleware('admin.can:core.admin.user.destroy');
    });

    Route::prefix('permission')->group(function ()
    {
        Route::get('', [PermissionController::class , 'index'])
            ->name('core.admin.permission.index')
            ->middleware('admin.can:core.admin.permission.destroy');

        Route::get('/create', [PermissionController::class, 'create'])
            ->name('core.admin.permission.create')
            ->middleware('admin.can:core.admin.permission.destroy');

        Route::get('{id}/edit', [PermissionController::class, 'edit'])
            ->name('core.admin.permission.edit')
            ->middleware('admin.can:core.admin.permission.destroy');

        Route::post('', [PermissionController::class, 'store'])
            ->name('core.admin.permission.store')
            ->middleware('admin.can:core.admin.permission.destroy');

        Route::put('{id}/update', [PermissionController::class, 'update'])
            ->name('core.admin.permission.update')
            ->middleware('admin.can:core.admin.permission.destroy');

        Route::delete('{id}/destroy', [PermissionController::class, 'destroy'])
            ->name('core.admin.permission.destroy')
            ->middleware('admin.can:core.admin.permission.destroy');
    });

    Route::prefix('setting')->group(function (){
        Route::get('', [SettingController::class, 'index'])
            ->name('core.admin.setting.index')
            ->middleware('admin.can:core.admin.setting.index');

        Route::get('/create', [SettingController::class, 'create'])
            ->name('core.admin.setting.create')
            ->middleware('admin.can:core.admin.setting.create');

        Route::get('{id}/update', [SettingController::class, 'edit'])
            ->name('core.admin.setting.edit')
            ->middleware('admin.can:core.admin.setting.edit');

        Route::post('store', [SettingController::class, 'store'])
            ->name('core.admin.setting.store')
            ->middleware('admin.can:core.admin.setting.store');

        Route::put('{id}/update', [SettingController::class, 'update'])
            ->name('core.admin.setting.update')
            ->middleware('admin.can:core.admin.setting.update');

        Route::delete('{id}/destroy', [SettingController::class, 'destroy'])
            ->name('core.admin.setting.destroy')
            ->middleware('admin.can:core.admin.setting.destroy');
    });

    //Example Route
    Route::get('/example/icon', [ExampleController::class, 'icons'])
        ->name('core.admin.example.icon');

});
