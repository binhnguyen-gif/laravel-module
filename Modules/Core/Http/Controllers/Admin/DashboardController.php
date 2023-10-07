<?php

namespace Modules\Core\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Modules\Core\Entities\Admin;

class DashboardController extends Controller
{
    public function index()
    {

        return view("core::dashboard");
    }

    public function profile()
    {
        return view("core::admin.profile");
    }

    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' =>   'phone',
            'password' => '',
            're-password'   =>  'same:password'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput($request->all());
        }
        if ($request->password){
            $data = $request->only(['name', 'email', 'phone', 'password']);
            $data['password'] = Hash::make($request->password);
        }else{
            $data = $request->only(['name', 'email', 'phone']);
        }
        $admin = Auth::guard('admin')->user();

        if ($request->hasFile('avatar')){
            $admin->clearMediaCollection('avatar');
            $admin->addMedia($request->file('avatar'))->toMediaCollection('avatar');
        }
        $admin->update($data);
        return redirect()->back()->with('success', 'Updated profile success');

    }
}
