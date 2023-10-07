<?php

namespace Modules\Menu\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Modules\Menu\Entities\MenuItem;
use Modules\Menu\Facades\MenuBuilder;
use Modules\Menu\Repositories\MenuItemInterface;
use Modules\Menu\Repositories\MenuItemRepository;
use Modules\Menu\Services\MenuRegisterService;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Menu';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'menu';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));
        $this->registerAdminMenu();
        require_once __DIR__.'/../Helpers/helpers.php';
        $this->app->singleton(MenuItemInterface::class, function (){
            return new MenuItemRepository(new MenuItem());
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->bind("MenuBuilder", function (){
            return new MenuRegisterService();
        });
        $loader = AliasLoader::getInstance();
        $loader->alias("MenuBuilder", MenuBuilder::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower . '.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/config.php'), $this->moduleNameLower
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/' . $this->moduleNameLower);

        $sourcePath = module_path($this->moduleName, 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], ['views', $this->moduleNameLower . '-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/' . $this->moduleNameLower);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->moduleNameLower);
        } else {
            $this->loadTranslationsFrom(module_path($this->moduleName, 'Resources/lang'), $this->moduleNameLower);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path . '/modules/' . $this->moduleNameLower)) {
                $paths[] = $path . '/modules/' . $this->moduleNameLower;
            }
        }
        return $paths;
    }

    private function registerAdminMenu(){
        Event::listen(RouteMatched::class, function () {

            \Menu::make('admin_menu_primary', function ($menu) {
                $menu->add('Menus', [
                    'route' =>  'menu.admin.menu.index',
                    'parent'    =>  'settings',
                    'id'    =>  'media',
                    'icon'  =>  'image',
                ])->data('order', 1);
            });

        });
    }

}
