<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
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
//         \App\Models\User::factory(10)->create();
        Role::create(['name'=>'ADMIN']);
        Role::create(['name'=>'MANAGER']);
        Role::create(['name'=>'STAFF']);
        $pms=array(
            'CRUD_USER_ACCOUNT',
            'CRUD_INTEREST',
            'CRUD_FEES',
            'CRUD_SERVICE',
            'CRUD_RULES',
            'CRUD_CONDITION',
            'CONFIRM_TRANSACTION',
            'STATISTIC_NOTIFY',
            'ALL'
        );
        foreach ($pms as $pm) {
            Permission::create(['name'=>$pm]);
        }
        User::create([
            'name'=>'nam hoang',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt("asd123"),
        ]);
        User::create([
            'name'=>'hoang nam',
            'email'=>'user@gmail.com',
            'password'=>bcrypt("asd123"),
        ]);
        Admin::create([
            'user_id'=>1,
            'role'=>1,
            'permission'=>2,
        ]);

    }
}
