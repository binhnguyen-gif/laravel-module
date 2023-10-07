<?php

namespace Modules\Page\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Modules\Core\Facades\AdminPermission;
use Modules\Menu\Facades\MenuBuilder;
use Modules\Page\Entities\Page;
use Modules\Page\Facades\PageLayout;
use Modules\Page\Services\PageLayoutService;

class PageServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Page';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'page';

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
        require_once __DIR__.'/../Helpers/helpers.php';
        $this->registerAdminMenu();
        $this->registerMenuBuilder();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

        $this->app->bind('PageLayout', function (){
            return new PageLayoutService();
        });
        // Load page layout
        $loader = AliasLoader::getInstance();
        $loader->alias('PageLayout', PageLayout::class);
        $this->app->alias('PageLayout', PageLayoutService::class);

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

                $menu->add('Pages', [
                    'route' => 'core.admin.page.index',
                    'id' => 'blog_page',
                    'icon' => 'layout',
                ])->data('order', 3);
            });

        });
        AdminPermission::add('Pages', [
            'core.admin.page.index',
            'core.admin.page.create',
            'core.admin.page.edit',
            'core.admin.page.destroy',
        ]);
        $this->registerPageLayout();
    }

    private function registerPageLayout(){

        PageLayout::add('Home', 'home', 'page::web.home');
        PageLayout::add('Danh sách tin tức', 'news_list', 'page::web.blogs');
        PageLayout::add('Dịch vụ', 'service', 'page::web.service');
        PageLayout::add('Thiết kế website', 'thiet_ke_website', 'page::web.thiet-ke-website');
        PageLayout::add('Chăm sóc website', 'dich_vu_cham_soc_website', 'page::web.cham-soc-website');
        PageLayout::add('Mobile app', 'mobile_app', 'page::web.mobile-app');
        PageLayout::add('Dự án', 'project_list', 'page::web.project');
        PageLayout::add('Thiết kế website Quảng Ngãi', 'thiet_ke_website_quang_ngai', 'page::web.web-quang-ngai');

    }

    private function registerMenuBuilder(){
        MenuBuilder::register("Page","page_menu", Page::class);
    }
}
