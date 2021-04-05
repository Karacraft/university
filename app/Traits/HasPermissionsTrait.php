<?php

namespace App\Traits;

use App\Permission;
use App\Role;

Trait HasPermissionsTrait
{
    public function givePermissionsTo(... $permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        // dd($permissions);
        if($permissions === null) {
          return $this;
        }

        $this->permissions()->saveMany($permissions);
        return $this;
    }

    public function withdrawPermissionsTo( ... $permissions )
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }

    public function refreshPermissions( ... $permissions )
    {
        $this->permissions()->detach();
        return $this->givePermissionsTo($permissions);
    }

    //  Does User have a permisison to to act via role
    public function hasPermissionTo($permission) {return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);}

    //  Does user have a permission to do action via role
    public function hasPermissionThroughRole($permission)
    {
        foreach ($permission->roles as $role){
            if($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }

    //  Does User have particualr role?
    public function hasRole( ... $roles )
    {
        foreach ($roles as $role) {
          if ($this->roles->contains('slug', $role)) {
            return true;
          }
        }
        return false;
    }

    //  User Can Have Many Roles
    public function roles() {return $this->belongsToMany(Role::class,'users_roles');}
    //  User Can have many permissions
    public function permissions() {return $this->belongsToMany(Permission::class,'users_permissions');}
    //  Does this user have particular Permission
    protected function hasPermission($permission) {return (bool) $this->permissions->where('slug', $permission->slug)->count();}
    //  Get all the permissions
    protected function getAllPermissions(array $permissions) {return Permission::whereIn('slug',$permissions)->get();}

}
