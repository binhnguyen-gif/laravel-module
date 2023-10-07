<?php


namespace Modules\Menu\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Modules\Core\Repositories\view;
use Modules\Menu\Entities\Menu;
use Modules\Menu\Entities\MenuItem;
use Modules\Menu\Repositories\MenuItemInterface;

class MenuItemController extends Controller
{
    protected $menuItemRepository;
    public function __construct(MenuItemInterface $menuItemRepository)
    {
        $this->menuItemRepository = $menuItemRepository;
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'menu_id'   =>  'required|numeric',
            'name'  =>  'required'
        ]);

        if ($validator->fails()){
            return response()->json([
                'message'   =>  $validator->errors()
            ], 422);
        }

        $menu = Menu::find($request->menu_id);

        if (!$menu){
            return response()->json([
                'message'   =>  'something is not right !',
            ], 422);
        }

        $menuItem = new MenuItem();
        if ($request->menu_builder_type == 'custom_link'){
            $menuItem->menu_id = $request->menu_id;
            $menuItem->name = $request->name;
            $menuItem->icon = $request->icon;
            $menuItem->class = $request->class;
            $menuItem->target = $request->target ? $request->target : '_self';
            $menuItem->url = $this->setRequestUrl($request);
            $menuItem->save();

        }elseif ($request->menu_builder_type == 'link_builder'){

            if (!$request->class_id && !$request->class_name){
                return response()->json([
                    'message'   =>  'something is not right !',
                ], 422);
            }
            $entity = app()->make($request->class_name)->find($request->class_id);
            if (!$entity){
                return response()->json([
                    'message'   =>  'something is not right !',
                ], 422);
            }

            $menuItem->menu_id = $request->menu_id;
            $menuItem->name = $request->name;
            $menuItem->icon = $request->icon;
            $menuItem->class = $request->class;
            $menuItem->target = $request->target ? $request->target : '_self';
            $menuItem->url = $entity->url;
            $menuItem->builder_type = $request->class_name;
            $menuItem->builder_id = $request->class_id;
            $menuItem->menu_item_label = $request->menu_item_label;
            $menuItem->save();

        }else{
            return response()->json([
                'message'   =>  'something is not right !',
            ], 422);
        }

        return response()->json([
            'message'   =>  'Created menu item success',
            'data'  =>  $menuItem
        ]);
    }

    public function edit(Request $request, $id)
    {
        // TODO: Implement edit() method.
    }

    public function update(Request $request, $id)
    {
        $menuItem = MenuItem::find($id);
        if (!$menuItem){
            return response()->json([
                'message'   =>  'Menu item not correct'
            ], 404);
        }
        $menuItem->update($request->all());
        return response()->json([
            'message'   =>  'Updated menu item successfully'
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $menuItem = MenuItem::find($id);
        if ($menuItem){
            $menuItem->delete();
        }
        return response()->json([
            'message'   =>  'Deleted menu item success'
        ]);
    }

    public function updateTree(Request $request){
        $data = $request->menu;
        $this->menuItemRepository->updateTree($data);
        return response()->json([
            'message'   =>  'Updated menu item success'
        ]);
    }

    private function setRequestUrl($request){
        if ($request->url && $request->url !== null){
            return $request->url;
        }
        if ($request->url == null){
            return '/';
        }
    }
}
