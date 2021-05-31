<?php

namespace App\Models;

use App\Models\Base;
use App\Models\Role;
use App\Models\User;
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
            Permission::create(['title' => 'Show User', 'slug' => 'show_user' , 'method' => 'display', 'model' => 'User' ]);
            Permission::create(['title' => 'Delete User', 'slug' => 'delete_user' , 'method' => 'delete', 'model' => 'User' ]);
            Permission::create(['title' => 'Show User List', 'slug' => 'show_user_list' , 'method' => 'list', 'model' => 'User' ]);
            //  Permission Model
            Permission::create(['title' => 'Create Permission', 'slug' => 'create_permission' , 'method' => 'create', 'model' => 'Permission' ]);
            Permission::create(['title' => 'Edit Permission', 'slug' => 'edit_permission' , 'method' => 'edit', 'model' => 'Permission' ]);
            Permission::create(['title' => 'Update Permission', 'slug' => 'update_permission' , 'method' => 'update', 'model' => 'Permission' ]);
            Permission::create(['title' => 'Show Permission', 'slug' => 'show_permission' , 'method' => 'display', 'model' => 'Permission' ]);
            Permission::create(['title' => 'Delete Permission', 'slug' => 'delete_permission' , 'method' => 'delete', 'model' => 'Permission' ]);
            Permission::create(['title' => 'Show Permission List', 'slug' => 'show_permission_list' , 'method' => 'list', 'model' => 'Permission' ]);
            //  Role Model
            Permission::create(['title' => 'Create Role', 'slug' => 'create_role' , 'method' => 'create', 'model' => 'Role' ]);
            Permission::create(['title' => 'Edit Role', 'slug' => 'edit_role' , 'method' => 'edit', 'model' => 'Role' ]);
            Permission::create(['title' => 'Update Role', 'slug' => 'update_role' , 'method' => 'update', 'model' => 'Role' ]);
            Permission::create(['title' => 'Show Role', 'slug' => 'show_role' , 'method' => 'display', 'model' => 'Role' ]);
            Permission::create(['title' => 'Delete Role', 'slug' => 'delete_role' , 'method' => 'delete', 'model' => 'Role' ]);
            Permission::create(['title' => 'Show Role List', 'slug' => 'show_role_list' , 'method' => 'list', 'model' => 'Role' ]);

            DB::commit();

        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
    /** Relationships */
    public function roles(){return $this->belongsToMany(Role::class, 'roles_permissions');}
    //  Permission can be given to multiple users
    public function users(){return $this->belongsToMany(User::class,'users_permissions');}
}
