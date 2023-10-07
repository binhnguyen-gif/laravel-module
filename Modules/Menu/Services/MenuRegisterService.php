<?php


namespace Modules\Menu\Services;


use Illuminate\Database\Eloquent\Model;
use Modules\Menu\Entities\Menu;
use Modules\Menu\Entities\MenuItem;

class MenuRegisterService
{
    public $menuBuilder;

    /**
     * @param $menuName
     * @param $builderId
     * @param $model
     * @param string[] $mapping
     * @return $this
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register($menuName, $builderId, $model, $mapping = ["name as name", "id as value"])
    {
        try {
            $options = app()->make($model)->orderByDesc('id')
                ->get($mapping)->toArray();

            $menus = [
                "name"  =>  $menuName,
                'builder_id'    =>  $builderId,
                'options'    =>  $options,
                'class'    =>  $model,
            ];

            $this->menuBuilder[] = $menus;
            return $this;
        }catch (\Exception $exception){

        }
    }

    public function renderMenuItem($menuId = null)
    {
        $menuBuilder = $this->menuBuilder;
        return view("menu::admin.builder.builder", compact('menuBuilder', 'menuId'));
    }

    /**
     * Render Fontend menu.
     * @param $key
     * @param $view
     */
    public function render($key, $view)
    {
        $viewExits = view()->exists($view);
        $menu = Menu::where('key', $key)->first();
        if (!$viewExits){
            return "View not found";
        }
        if (!$menu){
            return "View not found";
        }
        $menuItem = MenuItem::where('menu_id', $menu->id) ->defaultOrder()->get()->toTree();
        return view($view, compact('menu', 'menuItem'));
    }

}
