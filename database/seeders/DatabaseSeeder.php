<?php

namespace Database\Seeders;

use App\Models\AccountType;
use App\Models\Admin;
use App\Models\CardAccountDefaultConnection;
use App\Models\CardType;
use App\Models\CreditCardType;
use App\Models\DebitCardType;
use App\Models\Permissions;
use App\Models\Roles;
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

        $this->createAccount();

//      card and account

        AccountType::factory(3)->create();
        CreditCardType::factory(3)->create();
        DebitCardType::factory(3)->create();
//
        $CardType=['DEBIT','CREDIT'];
        CardType::create([
            'name'=>'card_type_'.random_int(1,5),
            'type'=>$CardType[1],
            'credit_card_type_id'=>1,
        ]);
        CardType::create([
            'name'=>'card_type_'.random_int(1,5),
            'type'=>$CardType[0],
            'debit_card_type_id'=>2,
        ]);
        CardType::create([
            'name'=>'card_type_'.random_int(1,5),
            'type'=>$CardType[0],
            'debit_card_type_id'=>3,
        ]);
        CardType::create([
            'name'=>'card_type_'.random_int(1,5),
            'type'=>$CardType[1],
            'credit_card_type_id'=>2,
        ]);
//
        CardAccountDefaultConnection::create([
            'card_type_id'=>2,
            'account_type_id'=>1
        ]);

        CardAccountDefaultConnection::create([
            'card_type_id'=>2,
            'account_type_id'=>2
        ]);
        CardAccountDefaultConnection::create([
            'card_type_id'=>3,
            'account_type_id'=>3
        ]);

    }

    public function createAccount(){
        Roles::create(['name'=>'ADMIN']);
        Roles::create(['name'=>'MANAGER']);
        Roles::create(['name'=>'STAFF']);
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
            Permissions::create(['name'=>$pm]);
        }
        User::create([
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt("asd123"),
        ]);
        User::create([
            'username'=>'0987654321',
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
