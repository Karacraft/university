<?php

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
    }
}
