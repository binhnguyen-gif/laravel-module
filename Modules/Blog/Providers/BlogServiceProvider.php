<?php

namespace Modules\Blog\Providers;

use Closure;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Modules\Blog\Entities\Category;
use Modules\Core\Facades\AdminPermission;
use Modules\Menu\Facades\MenuBuilder;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Blog';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'blog';

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
        require_once __DIR__ . '/../Helpers/helpers.php';
        $this->registerMenu();
        $this->registerMenuBuilder();
        $this->registerPermissions();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
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


    private function registerMenu()
    {
        Event::listen(RouteMatched::class, function () {

            \Menu::make('admin_menu_primary', function ($menu) {
                $menu->add('Blog', [
                    'route' => 'blog.admin.post.index',
                    'id' => 'blog',
                    'icon' => 'edit',
                ])->data('order', 2);

                $menu->add('Categories', [
                    'route' => 'blog.admin.category.index',
                    'permission'    =>  'blog.admin.category.index',
                    'id' => 'blog_category',
                    'parent'   =>   'blog',
                    'icon' => 'page',
                ])->data('order', 2);

                $menu->add('Posts', [
                    'route' => 'blog.admin.post.index',
                    'permission'    =>  'blog.admin.post.index',
                    'id' => 'blog_post',
                    'parent'   =>   'blog',
                    'icon' => 'page',
                ])->data('order', 1);
            });

        });
    }

    private function registerPageLayout(){

    }

    private function registerMenuBuilder(){
        MenuBuilder::register("Blog categories","blog_category_menu", Category::class);
    }

    private function registerPermissions()
    {
        AdminPermission::add("Blog Category", [
            "blog.admin.category.index",
            "blog.admin.category.create",
            "blog.admin.category.edit",
            "blog.admin.category.destroy",
        ]);

        AdminPermission::add("Blog post", [
            "blog.admin.post.index",
            "blog.admin.post.create",
            "blog.admin.post.edit",
            "blog.admin.post.destroy",
        ]);
    }
}
