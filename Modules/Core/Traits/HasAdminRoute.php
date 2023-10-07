<?php


namespace Modules\Core\Traits;


use Illuminate\Support\Facades\Route;

trait HasAdminRoute
{
    protected function mapAdminRoutes(){
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $moduleName = $arr_class[1];
        Route::prefix('admin')
            ->namespace($this->moduleNamespace)
            ->group(module_path($moduleName, '/Routes/admin.php'));
    }

}
