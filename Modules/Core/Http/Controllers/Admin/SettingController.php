<?php


namespace Modules\Core\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\Setting;

class SettingController extends Controller
{

    public function index(Request $request)
    {
        $settings = Setting::all();
        $arr = [];
        foreach ($settings as $value){
            $arr[$value->key] = $value->value;
        }
        $collect = collect($arr)->toJson();
        $item = json_decode($collect);
        if (count($arr) == 0){
             $item = null;
        }

        return view("core::admin.setting.index",compact('item'));
    }

    public function create(Request $request)
    {
        // TODO: Implement create() method.
    }

    public function store(Request $request)
    {
        $allRequest = $request->all();
        foreach ($allRequest as $key => $value) {
            if ($request->hasFile($key)) {
                $check = Setting::where('key', $key)->first();
                if ($check){
                    $setting = $check->update([
                        'name'  =>  $key,
                        'key'   =>  $key,
                        'type'  =>  Setting::TYPE_IMAGE,
                        'value' =>  $request->file($key)->getClientOriginalName(),
                    ]);
                    $check->clearMediaCollection($key);
                    $check->addMedia($request->file($key))->toMediaCollection($key);
                }else{
                    $setting = Setting::create([
                        'name'  =>  $key,
                        'key'   =>  $key,
                        'type'  =>  Setting::TYPE_IMAGE,
                        'value' =>  $request->file($key)->getClientOriginalName(),
                    ]);
                    $setting->addMedia($request->file($key))->toMediaCollection($key);
                }
            }else{
                $check = Setting::where('key', $key)->first();
                if ($check){
                    $setting = $check->update([
                        'name'  =>  $key,
                        'key'   =>  $key,
                        'type'  =>  Setting::TYPE_INPUT,
                        'value' =>  $value,
                    ]);
                }else{
                    $setting = Setting::create([
                        'name'  =>  $key,
                        'key'   =>  $key,
                        'type'  =>  Setting::TYPE_INPUT,
                        'value' =>  $value,
                    ]);
                }
            }
        }

        return redirect()->back()->with('success', 'Updated setting successfully');
    }

    public function edit(Request $request, $id)
    {
        // TODO: Implement edit() method.
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy(Request $request, $id)
    {
        // TODO: Implement destroy() method.
    }
}
