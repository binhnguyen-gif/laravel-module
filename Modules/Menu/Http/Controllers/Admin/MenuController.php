<?php


namespace Modules\Menu\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Modules\Core\Repositories\BaseControllerRepositoryInterface;
use Modules\Menu\Entities\Menu;
use Modules\Menu\Entities\MenuItem;

class MenuController extends Controller implements BaseControllerRepositoryInterface
{

    public function index(Request $request)
    {
        $items = Menu::all();
        $activeOneMenu = null;
        $menuItem = null;
        if ($request->active_menu){
            $menu = Menu::find($request->active_menu);
            if (!$menu){
                return redirect()->back()->with('error', 'Menu not correct');
            }
            $activeOneMenu = $menu;
            $menuItem = MenuItem::where('menu_id', $menu->id)
                ->defaultOrder()->get()->toTree();
            return view("menu::admin.menu.index", compact('items', 'activeOneMenu', 'menuItem'));
        }
        if ($items->count() > 0){
            $activeOneMenu = $items[0];
            $menuItem = MenuItem::where('menu_id', $activeOneMenu->id)
                ->defaultOrder()->get()->toTree();

        }else{
            $activeOneMenu = null;
        }
        return view("menu::admin.menu.index", compact('items', 'activeOneMenu', 'menuItem'));
    }

    public function create(Request $request)
    {
        $item = null;
        return view("menu::admin.menu.create", compact('item'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'name'   =>  'required',
           'key'   =>  'required'
        ]);
        $data = $request->all();
        $data['key']   =  Str::slug($request->name, '_');

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())
                ->withInput($request->all());
        }

        Menu::create($data);

        return redirect()->route('menu.admin.menu.index')
            ->with('success', 'Created menu successful');
    }

    public function edit(Request $request, $id)
    {
        $item = Menu::find($id);

        if (!$item){
            return redirect()->back()
                ->with('error', 'Menu not correct');
        }

        return view("menu::admin.menu.edit", compact('item'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        if (!$menu){
            return redirect()->back()
                ->with('error', 'Menu not correct');
        }

        $validator = Validator::make($request->all(), [
            'name'   =>  'required',
            'key'   =>  'required'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())
                ->withInput($request->all());
        }

        $menu->update($request->all());

        return redirect()->route('menu.admin.menu.index')
            ->with('success', 'Menu updated success');
    }

    public function destroy(Request $request, $id)
    {
        $menu = Menu::find($id);
        if (!$menu){
            return redirect()->back()
                ->with('error', 'Menu not correct');
        }
        $menu->delete();
        return redirect()->route('menu.admin.menu.index')
            ->with('success', 'Menu deleted success');
    }
}
