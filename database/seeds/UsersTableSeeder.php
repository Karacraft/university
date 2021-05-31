<?php


use App\Models\Role;
use App\Models\User;
use App\Helpers\Constants;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    
    //  php artisan db:wipe && php artisan migrate && php artisan db:seed
    // https://www.codecheef.org/article/user-roles-and-permissions-tutorial-in-laravel-without-packages

    public function run()
    {
        //  Permissions
        $adminPerm = Permission::find(1);
        $level1Perm = Permission::find(4);
        // $this->command->info($adminPerm);
        
        //  Roles
        $adminRole = Role::find(1);
        $adminRole->permissions()->attach($adminPerm);

        $level1Role = Role::find(2);
        $level1Role->permissions()->attach($level1Perm);

        //  SUPER ADMINS
        $user = new User();
        $user->name = 'Ali Jibran';
        $user->email = 'dukejib@gmail.com';
        $user->password = Hash::make('laravel8');
        $user->role = 'owner';
        $user->save();
        $user->roles()->attach($adminRole);
        $user->permissions()->attach($adminPerm);
       
        $user2 = new User();
        $user2->name = 'Asma Ali';
        $user2->email = 'asma@gmail.com';
        $user2->password = Hash::make('laravel8');
        $user2->role = 'level1';
        $user2->save();
        $user2->roles()->attach($level1Role);
        $user2->permissions()->attach($level1Perm);

        // $user = new User();
        // $user->name = 'Muhammad Kashif Fasih';
        // $user->email = 'mkf@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->role_id = Constants::SUPER_ADMIN;
        // $user->save();

        //  CAN ACCESS OPS AND FINANCE
        // $user = new User();
        // $user->name = 'Abbas ul Hussaini';
        // $user->email = 'abbas@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->role_id = Constants::CAN_ACCESS_OPS_AND_FINANCE;
        // $user->save();

        // $user = new User();
        // $user->name = 'Ziaul Abedeen';
        // $user->email = 'zia@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->role_id = Constants::CAN_ACCESS_OPS_AND_FINANCE;
        // $user->save();

        // $user = new User();
        // $user->name = 'Adeel Iqbal';
        // $user->email = 'adeel.iqbal@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'CFO';
        // $user->role_id = Constants::CAN_ACCESS_OPS_AND_FINANCE;
        // $user->save();

        // $user = new User();
        // $user->name = 'Muzaffar Ali Qazi';
        // $user->email = 'mqazi@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Sr. GM';
        // $user->role_id = Constants::CAN_ACCESS_OPS_AND_FINANCE;
        // $user->save();

        // $user = new User();
        // $user->name = 'Sibtain Haji';
        // $user->email = 'sibtain.haji@hoh.net';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Director';
        // $user->role_id = Constants::CAN_ACCESS_OPS_AND_FINANCE;
        // $user->save();

        // $user = new User();
        // $user->name = 'Fahim Kapadiya';
        // $user->email = 'fkapadia@hoh.net';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Director';
        // $user->role_id = Constants::CAN_ACCESS_OPS_AND_FINANCE;
        // $user->save();

        // $user = new User();
        // $user->name = 'Tariq Ahmed Khan';
        // $user->email = 'tariq.ahmed@hoh.net';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Director';
        // $user->role_id = Constants::CAN_ACCESS_OPS_AND_FINANCE;
        // $user->save();

        // $user = new User();
        // $user->name = 'Mahad Hamza';
        // $user->email = 'mahad.hamza@hoh.net';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Director';
        // $user->role_id = Constants::CAN_ACCESS_OPS_AND_FINANCE;
        // $user->save();

        //  CAN ACCESS OPS ONLY
        // $user = new User();
        // $user->name = 'Izhar Mustafa';
        // $user->email = 'izhar.mustafa@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Manager';
        // $user->role_id = Constants::CAN_ACCESS_OPS_ONLY;
        // $user->save();
        
        // $user = new User();
        // $user->name = 'Ilyas Hussain';
        // $user->email = 'ilyas.hussain@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Manager';
        // $user->role_id = Constants::CAN_ACCESS_OPS_ONLY;
        // $user->save();
        
        // $user = new User();
        // $user->name = 'Major Tayyab';
        // $user->email = 'tayyab@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Manager';
        // $user->role_id = Constants::CAN_ACCESS_OPS_ONLY;
        // $user->save();
        
        // $user = new User();
        // $user->name = 'Iqbal Arif';
        // $user->email = 'iqbal.arif@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Manager';
        // $user->role_id = Constants::CAN_ACCESS_OPS_ONLY;
        // $user->save();
        
        // $user = new User();
        // $user->name = 'Nazimuddin';
        // $user->email = 'nazimuddin@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Manager';
        // $user->role_id = Constants::CAN_ACCESS_OPS_ONLY;
        // $user->save();
        
        // $user = new User();
        // $user->name = 'Junaid Saeed';
        // $user->email = 'junaid.saeed@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Manager';
        // $user->role_id = Constants::CAN_ACCESS_OPS_ONLY;
        // $user->save();
        
        // $user = new User();
        // $user->name = 'Sumair';
        // $user->email = 'sumair@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Manager';
        // $user->role_id = Constants::CAN_ACCESS_OPS_ONLY;
        // $user->save();
        
        // $user = new User();
        // $user->name = 'Hasnain Jafri';
        // $user->email = 'hasnain.jafri@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'HR Manager';
        // $user->role_id = Constants::CAN_ACCESS_OPS_ONLY;
        // $user->save();
        
        // $user = new User();
        // $user->name = 'Nasir Hussain';
        // $user->email = 'nasir.hussain@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Marketing Manager';
        // $user->role_id = Constants::CAN_ACCESS_OPS_ONLY;
        // $user->save();
        
        // $user = new User();
        // $user->name = 'Rahila';
        // $user->email = 'rahila@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Manager ABM';
        // $user->role_id = Constants::CAN_ACCESS_OPS_ONLY;
        // $user->save();
        
        // $user = new User();
        // $user->name = 'Ilyas Shah';
        // $user->email = 'ilyas.shah@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Manager';
        // $user->role_id = Constants::CAN_ACCESS_OPS_ONLY;
        // $user->save();
        
        // $user = new User();
        // $user->name = 'Major Hafeez Khan';
        // $user->email = 'hafeez.khan@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Manager Admin';
        // $user->role_id = Constants::CAN_ACCESS_OPS_ONLY;
        // $user->save();
        
        // $user = new User();
        // $user->name = 'Muneeb Afaq';
        // $user->email = 'muneeb.afaq@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'Manager';
        // $user->role_id = Constants::CAN_ACCESS_OPS_ONLY;
        // $user->save();
         
        // $user = new User();
        // $user->name = 'Zain Hasham';
        // $user->email = 'zain.hasham@auvitronics.com';
        // $user->password = Hash::make('avt@uni2019');
        // $user->designation = 'General Manager';
        // $user->role_id = Constants::CAN_ACCESS_OPS_ONLY;
        // $user->save();
    }
}
