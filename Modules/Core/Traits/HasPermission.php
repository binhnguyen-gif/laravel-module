<?php


namespace Modules\Core\Traits;


use Illuminate\Support\Collection;
use Modules\Core\Entities\Role;

trait HasPermission
{
    protected $permissionList = null;

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'admin_role', 'admin_id', 'role_id');
    }

    protected $allPermissions;

    protected $loaded = false;

    protected function loadPermission()
    {

        foreach ($this->roles as $role) {
            $rolePermissions = new Collection(json_decode($role->permissions, true));
            $this->allPermissions = $rolePermissions->unique();
        }
    }

    public function allPermissions()
    {
        $this->loadPermission();

        return $this->allPermissions;
    }

    public function hasPermission($key)
    {
        if ($this->is_admin) {
            return true;
        }

        foreach ($this->roles as $role) {
            if ($role->is_admin) {
                return true;
            }
        }

        $this->loadPermission();
        return $this->allPermissions->contains($key);
    }

    private function getPermissions()
    {
        $role = $this->roles->first();
        if ($role) {
            if (! $role->relationLoaded('permissions')) {
                $this->roles->load('permissions');
            }

            $this->permissionList = $this->roles->pluck('permissions')->flatten();
            dd($this->permissionList);
        }

        return $this->permissionList ?? collect();
    }
}
