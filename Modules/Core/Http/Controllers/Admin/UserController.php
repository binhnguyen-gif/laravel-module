<?php


namespace Modules\Core\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Modules\Core\Entities\Admin;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $items = Admin::orderByDesc('id')->paginate(30);
        return view("core::admin.user.index", compact('items'));
    }

    public function create(Request $request)
    {
        $item = null;
        return view("core::admin.user.create", compact('item'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'name'   =>  'required',
           'email'  =>  'required|email',
           'password'   =>  'required',
           're-password'    =>  'required|same:password'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $data = $request->only(['name', 'email', 'phone', 'password']);
        $data['password'] = Hash::make($request->password);
        if ($request->is_admin){
            $data['is_admin']   =   false;
        }
        $admin = Admin::create($data);
        $admin->roles()->sync($request->roles);

        if ($request->hasFile('avatar')){
            $admin->clearMediaCollection('avatar');
            $admin->addMedia($request->file('avatar'))->toMediaCollection('avatar');
        }
        return redirect()->route('core.admin.user.index')
            ->with('success', 'Created admin user successfully');

    }

    public function edit(Request $request, $id)
    {
        $item = Admin::find($id);
        if (!$item){
            return redirect()->back()->with('error', 'User not found');
        }
        return view("core::admin.user.edit", compact('item'));
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        if (!$admin){
            return redirect()->back()
                ->with('error', 'Admin user not found');
        }
        $validator = Validator::make($request->all(), [
            'name'   =>  'required',
            'email'  =>  'required|email',
//            'password'   =>  'sometimes|required',
//            're-password'    =>  'sometimes|required|same:password'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $data = $request->only(['name', 'email', 'phone', 'role_id', 'is_admin']);
//        if ($request->password){
//            $data['password'] = Hash::make($request->password);
//        }
        if ($request->is_admin){
            $data['is_admin'] = $request->is_admin;
        }
        $admin->update($data);

        if ($request->role_id){
            $admin->roles()->sync($request->roles);
        }

        if ($request->hasFile('avatar')){
            $admin->clearMediaCollection('avatar');
            $admin->addMedia($request->file('avatar'))->toMediaCollection('avatar');
        }
        return redirect()->route('core.admin.user.index')
            ->with('success', 'Created admin user successfully');
    }

    public function destroy(Request $request, $id)
    {
        // TODO: Implement destroy() method.
    }
}
