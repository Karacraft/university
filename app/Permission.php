<?php

namespace App;

use App\Base;
use App\Role;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Base
{
    use HasFactory;

    protected $table = 'permissions';
    protected $fillable = ['title','description','model','method','slug'];

    /** Scopes */
    /** Methods */
    public static function createBasePermissions()
    {
        DB::beginTransaction();
        try {
            //  User Model
            Permission::create(['title' => 'Create User', 'slug' => 'create_user' , 'method' => 'create', 'model' => 'User' ]);
            Permission::create(['title' => 'Edit User', 'slug' => 'edit_user' , 'method' => 'edit', 'model' => 'User' ]);
            Permission::create(['title' => 'Update User', 'slug' => 'update_user' , 'method' => 'update', 'model' => 'User' ]);
            Permission::create(['title' => 'Display User', 'slug' => 'display_user' , 'method' => 'display', 'model' => 'User' ]);
            Permission::create(['title' => 'Delete User', 'slug' => 'delete_user' , 'method' => 'delete', 'model' => 'User' ]);
            Permission::create(['title' => 'Display User List', 'slug' => 'display_user_list' , 'method' => 'display_list', 'model' => 'User' ]);
            //  Permission Model
            Permission::create(['title' => 'Create Permission', 'slug' => 'create_permission' , 'method' => 'create', 'model' => 'Permission' ]);
            Permission::create(['title' => 'Edit Permission', 'slug' => 'edit_permission' , 'method' => 'edit', 'model' => 'Permission' ]);
            Permission::create(['title' => 'Update Permission', 'slug' => 'update_permission' , 'method' => 'update', 'model' => 'Permission' ]);
            Permission::create(['title' => 'Display Permission', 'slug' => 'display_permission' , 'method' => 'display', 'model' => 'Permission' ]);
            Permission::create(['title' => 'Delete Permission', 'slug' => 'delete_permission' , 'method' => 'delete', 'model' => 'Permission' ]);
            Permission::create(['title' => 'Display Permission List', 'slug' => 'display_permission_list' , 'method' => 'display_list', 'model' => 'Permission' ]);
            //  Role Model
            Permission::create(['title' => 'Create Role', 'slug' => 'create_role' , 'method' => 'create', 'model' => 'Role' ]);
            Permission::create(['title' => 'Edit Role', 'slug' => 'edit_role' , 'method' => 'edit', 'model' => 'Role' ]);
            Permission::create(['title' => 'Update Role', 'slug' => 'update_role' , 'method' => 'update', 'model' => 'Role' ]);
            Permission::create(['title' => 'Display Role', 'slug' => 'display_role' , 'method' => 'display', 'model' => 'Role' ]);
            Permission::create(['title' => 'Delete Role', 'slug' => 'delete_role' , 'method' => 'delete', 'model' => 'Role' ]);
            Permission::create(['title' => 'Display Role List', 'slug' => 'display_role_list' , 'method' => 'display_list', 'model' => 'Role' ]);

            DB::commit();

        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
    /** Relationships */
    //  Permission can be given to multiple users
    public function users(){return $this->belongsToMany(User::class,'users_permissions');}
}
