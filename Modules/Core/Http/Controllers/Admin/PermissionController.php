<?php


namespace Modules\Core\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Modules\Core\Entities\Role;
use Modules\Core\Facades\AdminPermission;

class PermissionController extends Controller
{

    public function index(Request $request)
    {
        $items = Role::orderByDesc('id')->paginate(30);
        return view("core::admin.permission.index", compact('items'));
    }

    public function create(Request $request)
    {
        $item = null;
        $permissions = AdminPermission::table();
        return view("core::admin.permission.create", compact('item', 'permissions'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'name'   =>  'required',
           'permissions'   =>  'required|array'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)
                ->withInput($request->all());
        }
        $data = $request->all();
        $data['permissions'] = json_encode($request->permissions);
        Role::create($data);

        return redirect()->route('core.admin.permission.index')
            ->with('success', 'Created Role successfully');
    }

    public function edit(Request $request, $id)
    {
        $item = Role::find($id);
        $permissions = AdminPermission::table();
        return view("core::admin.permission.edit", compact('item', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'   =>  'required',
            'permissions'   =>  'required|array'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)
                ->withInput($request->all());
        }
        $data = $request->all();
        $data['permissions'] = json_encode($request->permissions);
        $role = Role::find($id);
        $role->update($data);

        return redirect()->route('core.admin.permission.index')
            ->with('success', 'Created Role successfully');
    }

    public function destroy(Request $request, $id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('core.admin.permission.index')
            ->with('success', 'Deleted Role successfully');
    }
}
