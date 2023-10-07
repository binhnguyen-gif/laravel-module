<?php


namespace Modules\Core\Services;


use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class PermissionService
{
    protected $permissions = [];

    protected $treePermissions = [];

    protected $headers = [];

    protected $all;

    public function all()
    {
        return $this->permissions;
    }

    public function table(){
        $headers = [];
        foreach ($this->all() as $role){
            foreach ($role['roles'] as $key => $Value){
                $headers[] = $key;
            }
        }
        $this->headers = array_unique($headers);
        $this->headers = array_unique($this->headers);
        return [
            "headers"   =>  $this->headers,
            "body"  =>  $this->permissions
        ];
    }

    public function allTree()
    {
        return Arr::sort($this->treePermissions);
    }


    public function add($name, $arr)
    {
        $roles = [];
        foreach ($arr as $key => $value){
            $strings = explode('.', $value);
            $last_item = $strings[count($strings)-1];
            $roles[$last_item] = $value;
        }
        $this->permissions[] = [
            "name"  =>  $name,
            "roles" => $roles
        ];
        return $this;
    }
}
