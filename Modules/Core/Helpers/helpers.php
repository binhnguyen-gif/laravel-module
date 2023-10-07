<?php
use Illuminate\Support\Facades\Auth;
use Modules\Core\Entities\Role;
use Modules\Core\Entities\Setting;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

if (!function_exists('get_selected_value')) {
    function get_selected_value(?string $value, $selected)
    {
        $selection = $selected instanceof Arrayable ? $selected->toArray() : $selected;

        if (is_array($selection)) {
            if (in_array($value, $selection, true) || in_array((string) $value, $selection, true)) {
                return 'selected';
            } elseif ($selected instanceof Collection) {
                return $selected->contains($value) ? 'selected' : null;
            }

            return null;
        }

        if (is_int($value) && is_bool($selected)) {
            return (bool) $value === $selected;
        }

        return ((string) $value === (string) $selected) ? 'selected' : null;
    }
}
if (!function_exists('get_dot_array_form')){
    function get_dot_array_form($name)
    {
        return preg_replace_callback('/\[([\w]+)\]/', function ($item) {
            return '.'.$item[1];
        }, $name);
    }
}
if (!function_exists('admin_user')){
    function admin_user(){
        return Auth::guard('admin')->user();
    }
}
if (!function_exists('admin_roles')){
    function admin_roles(){
        $roles = Role::orderByDesc('id')->get(["name as name", "id as value"])->toArray();
        return $roles;
    }
}

if (!function_exists('admin_can')) {
    function admin_can($permission)
    {
        /** @var \Modules\Core\Entities\Admin $user */
        $user = Auth::guard('admin')->user();

        if ($user && $user->hasPermission($permission)) {
            return true;
        }

        return false;
    }
}

if (!function_exists('admin_menu')){
    function admin_menu($menu){
        return $menu->filter(function ($item) {
            if ($item->hasChildren()) {
                 return true;
            }
            $permission = $item->attr('permission');
            if ($permission) {
                return admin_can($permission);
            }

            return true;
        });
    }
}
if (!function_exists('check_permission_child')){
    function check_permission_child($child){
        foreach ($child as $value){
            $permission = $value->attr('permission');
            if ($permission) {
                if (admin_can($permission) == true){
                    return true;
                }
            }
        }
        return false;
    }
}
if (!function_exists('setting')){
    function setting($key){

        $setting = app(\Modules\Core\Repositories\SettingRepositoryInterface::class);
        return $setting->get($key);
    }
}
if (!function_exists('theme_url')){
    function theme_url($url){
        return URL::asset("/static/assets/".$url);
    }
}

if (!function_exists('item_media')){
    function item_media($key){
        $setting =  Setting::where('key', $key)->first();
        if (!$setting){
            return null;
        }else{
            return $setting;
        }
    }
}
