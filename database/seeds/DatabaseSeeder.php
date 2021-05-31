<?php

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  Permissions
        Permission::createBasePermissions();
        //  Roles
        Role::createBaseRoles();

        //  Users
        $this->call(UsersTableSeeder::class);
        //  Give Permissions
        // $this->givePermissions()
    }

    // public function givePermissions()
    // {
    //     $admin = Permission::where('slug','create-user')->first()
    //     $user = Permission::where('slug','display-user')->first()


    // }
}
