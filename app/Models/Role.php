<?php

namespace App\Models;


use App\Models\Base;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Base
{
    use HasFactory;

    protected $table = 'roles';
    protected $fillable = ['title','description','slug'];

    /** Scopes */
    /** Methods */
    public static function createBaseRoles()
    {
        DB::beginTransaction();
        try {

            Role::create(['title' => 'ADMIN_ALL', 'description' => 'Full Authorized Administrative Role' , 'slug' => 'admin_all']);
            Role::create(['title' => 'BASIC_DISPLAY', 'description' => 'Basic Display Capabilities' , 'slug' => 'basic_display']);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }

    /** Relationships */
    public function permissions(){return $this->belongsToMany(Permission::class,'roles_permissions');}
    //  Role can have many users
    public function users(){return $this->belongsToMany(User::class,'users_roles');}

}
