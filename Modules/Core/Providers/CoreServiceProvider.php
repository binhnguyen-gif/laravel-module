<?php

namespace Modules\Core\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Modules\Core\Components\ActiveIconComponent;
use Modules\Core\Components\DeleteComponent;
use Modules\Core\Components\EditorComponent;
use Modules\Core\Components\GalleryComponent;
use Modules\Core\Components\ImageComponent;
use Modules\Core\Components\InputComponent;
use Modules\Core\Components\SelectComponent;
use Modules\Core\Components\SelectMultipleComponent;
use Modules\Core\Components\SlugComponent;
use Modules\Core\Components\SwitchComponent;
use Modules\Core\Components\HashtagComponent;
use Modules\Core\Components\TextareaComponent;
use Modules\Core\Console\CreateAdmin;
use Modules\Core\Console\Install;
use Modules\Core\Entities\SeoUrl;
use Modules\Core\Facades\AdminPermission;
use Modules\Core\Facades\SeoData;
use Modules\Core\Facades\SettingGenerate;
use Modules\Core\Http\Middleware\AdminAuthentication;
use Modules\Core\Http\Middleware\AdminMiddleware;
use Modules\Core\Http\Middleware\AdminRedirectIfAuthenticated;
use Modules\Core\Http\Middleware\SeoUrlMiddleware;
use Illuminate\Routing\Router;
use Modules\Core\Repositories\Eloquent\ErrorRedirectRepository;
use Modules\Core\Repositories\Eloquent\SettingRepository;
use Modules\Core\Repositories\Eloquent\UrlRepository;
use Modules\Core\Repositories\ErrorRedirectRepositoryInterface;
use Modules\Core\Repositories\SettingRepositoryInterface;
use Modules\Core\Repositories\UrlRepositoryInterface;
use Modules\Core\Services\PermissionService;
use Modules\Core\Services\SeoDataService;
use Modules\Core\Services\SettingGenerateService;


class CoreServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Core';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'core';

    /**
     * Boot the application events.
     *
     * @return void
     */

    protected $commands = [
        Install::class,
        CreateAdmin::class
    ];
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));
        $this->registerMiddleware();
        $this->registerComponents();
        require_once __DIR__.'/../Helpers/helpers.php';
        $this->registerAdminMenu();
        $this->registerPermissions();
        $this->registerBladeDirectives();
        $this->app->singleton(SettingRepositoryInterface::class, SettingRepository::class);
        Paginator::useBootstrap();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->registerCommand();
        $this->app->singleton(UrlRepositoryInterface::class, function () {
            return new UrlRepository(new SeoUrl());
        });
        $this->app->bind("AdminPermission", PermissionService::class);
        $this->app->bind("SeoData", SeoDataService::class);
        $this->app->bind("SettingGenerate", SettingGenerateService::class);
        $loader = AliasLoader::getInstance();
        $loader->alias("SeoData", SeoData::class);
        $loader->alias("SettingGenerate", SettingGenerate::class);
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
        // merge config admin
        $adminConfig = require_once __DIR__.'/../Config/admin.php';
        $authConfig = $this->app['config']->get('auth');
        $array1 = (array)$adminConfig;
        $array2 = (array)$authConfig;
        $auth = array_merge_recursive_distinct($array1, $array2);
        $this->app['config']->set('auth', $auth);
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

    private function registerMiddleware(){
        /** @var Router $router */
        $router = $this->app['router'];
        $router->aliasMiddleware('admin.auth', AdminAuthentication::class);
        $router->aliasMiddleware('admin.guest', AdminRedirectIfAuthenticated::class);
        $router->aliasMiddleware('admin.can', AdminMiddleware::class);
        $router->pushMiddlewareToGroup('web', SeoUrlMiddleware::class);
    }

    private function registerCommand(){
        $this->commands($this->commands);

//        if ($this->app->runningInConsole()) {
//            $this->commands($this->commandsCli);
//        }
    }

    private function registerComponents(){
        Blade::component('form-input', InputComponent::class);
        Blade::component('form-textarea', TextareaComponent::class);
        Blade::component('form-editor', EditorComponent::class);
        Blade::component('form-image', ImageComponent::class);
        Blade::component('form-is-publish', ActiveIconComponent::class);
        Blade::component('form-delete', DeleteComponent::class);
        Blade::component('form-switch', SwitchComponent::class);
        Blade::component('form-select', SelectComponent::class);
        Blade::component('form-input-slug', SlugComponent::class);
        Blade::component('form-gallery', GalleryComponent::class);
        Blade::component('form-select-multiple', SelectMultipleComponent::class);
        Blade::component('form-hashtag', HashtagComponent::class);
    }

    private function registerAdminMenu(){
        Event::listen(RouteMatched::class, function () {

            \Menu::make('admin_menu_primary', function ($menu) {
                $menu->add('Dashboard', [
                    'route' => 'core.admin.dashboard',
                    'id' => 'dashboard',
                    'class' => 'fa fa-category',
                    'icon'  =>  'home'
                ])->data('order', 1);

                $menu->add('Settings', [
                    'route' => 'core.admin.dashboard',
                    'id' => 'settings',
                    'class' => 'fa fa-category',
                    'icon'  =>  'settings'
                ])->data('order', 1001);

                $menu->add('Generate', [
                    'route' => 'core.admin.setting.index',
                    'parent'    => 'settings',
                    'permission'    =>  'core.admin.setting.index',
                    'id' => 'web_setting',
                    'icon'  =>  'settings'
                ])->data('order', 1);

                $menu->add('Icons', [
                    'route' => 'core.admin.example.icon',
                    'id' => 'icon',
                    'parent'    => 'settings',
                    'class' => 'fa fa-category',
                    'icon'  =>  'settings'
                ])->data('order', 1001);

                $menu->add('Administration', [
                    'route' => 'core.admin.permission.index',
                    'id' => 'admin_management',
                    'class' => 'fa fa-category',
                    'icon'  =>  'users'
                ])->data('order', 1000);

                $menu->add('Users', [
                    'route' => 'core.admin.user.index',
                    'permission'    =>  'core.admin.user.index',
                    'id' => 'admin_management_user',
                    'parent'    => 'admin_management',
                    'class' => 'fa fa-category',
                    'icon'  =>  'users'
                ])->data('order', 1);

                $menu->add('Roles', [
                    'route' => 'core.admin.permission.index',
                    'permission'    =>  'core.admin.permission.index',
                    'id' => 'admin_management_role',
                    'parent'    => 'admin_management',
                    'class' => 'fa fa-category',
                    'icon'  =>  'users',
                ])->data('order', 1);
            });

        });
    }

    private function registerPermissions()
    {
        // register permission for user
        AdminPermission::add("User", [
            "core.admin.user.index",
            "core.admin.user.create",
            "core.admin.user.edit",
            "core.admin.user.destroy"
        ]);
        AdminPermission::add("Permission", [
            "core.admin.permission.create",
            "core.admin.permission.index",
            "core.admin.permission.edit",
            "core.admin.permission.destroy"
        ]);

        AdminPermission::add("Settings", [
            "core.admin.setting.index",
            "core.admin.setting.create",
            "core.admin.setting.edit",
            "core.admin.setting.destroy"
        ]);

    }
    protected function registerBladeDirectives()
    {
        Blade::directive('rolecan', function ($expression) {
            return "<?php if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->hasPermission({$expression})): ?>";
        });

        Blade::directive('endrolecan', function () {
            return "<?php endif; ?>";
        });
    }
}
