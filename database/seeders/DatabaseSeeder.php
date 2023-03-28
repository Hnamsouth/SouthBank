<?php

namespace Database\Seeders;

use App\Models\AccountType;
use App\Models\Admin;
use App\Models\BalanceCardAccount;
use App\Models\Banks;
use App\Models\CardAccountDefaultConnection;
use App\Models\CardType;
use App\Models\CreditCardType;
use App\Models\DebitCardType;
use App\Models\DepositType;
use App\Models\DepositTypeInterestPaymentMethod;
use App\Models\InterestPaymentMethod;
use App\Models\Permissions;
use App\Models\Roles;
use App\Models\SavingInterestRate;
use App\Models\SettlementMethod;
use App\Models\TransactionType;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

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
//     card and account
        $this->C2();
//        create banks
        $this->C3();
//        create saving
        $this->C4();
////        create saving interest rate
//      deposit type 1: định kỳ
        $this->C5(1,1,'VND',3.45,3.50,4.9,5.20);
//       deposit type 2: trả lãi trước
        $this->C5(2,2,'VND',3.22,3.35,4.70,4.97);
//       deposit type 3: all
        $this->C5(3,3,'VND',3.65,3.70,5,5.20);
        $this->C5(2,3,'VND',3.42,3.47,4.70,4.97);
        $this->C5(1,3,'VND',0,3.47,4.67,5.07);
//      deposit type 4: cuối kỳ
        $this->C5(3,4,'VND',3.32,3.47,4.67,5.07);
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
        Admin::create([
            'user_id'=>1,
            'role'=>1,
            'permission'=>2,
        ]);
    }
    protected function C2(){
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

        $transType=array('TRANSFERS','ATM WITHDRAWAL','PAY BILL','PAY POS','SAVING DEPOSIT');
        foreach ($transType as $index=>$item){
            TransactionType::create([
                'name'=>$item,
                'code'=>$index+1
            ]);
        }
    }
    protected function C3(){
        $banks=Http::get('https://api.vietqr.io/v2/banks')->json()['data'];
        foreach ($banks as $item){
            Banks::create([
                "name"=>$item['name'],
                "code"=>$item['code'],
                "bin"=>$item['bin'],
                "shortName"=>$item['shortName'],
                "logo"=>$item['logo'],
                "transferSupported"=>$item['transferSupported'],
                "lookupSupported"=>$item['lookupSupported'],
                "short_name"=>$item['short_name'],
                "support"=>$item['support'],
                "isTransfer"=>$item['isTransfer'],
                "swift_code"=>$item['swift_code'],
            ]);
        }

    }
    protected function C4(){
        DepositType::factory(4)->create();
        InterestPaymentMethod::create(['name'=>'Interest paid periodically']);
        InterestPaymentMethod::create(['name'=>'Prepaid interest']);
        InterestPaymentMethod::create(['name'=>'Interest paid at maturity']);

        DepositTypeInterestPaymentMethod::create([
            'deposit_type_id'=>1,
            'interest_payment_method_id'=>1,
        ]);
        DepositTypeInterestPaymentMethod::create([
            'deposit_type_id'=>2,
            'interest_payment_method_id'=>2,
        ]);
        DepositTypeInterestPaymentMethod::create([
            'deposit_type_id'=>3,
            'interest_payment_method_id'=>1,
        ]);
        DepositTypeInterestPaymentMethod::create([
            'deposit_type_id'=>3,
            'interest_payment_method_id'=>2,
        ]);
        DepositTypeInterestPaymentMethod::create([
            'deposit_type_id'=>3,
            'interest_payment_method_id'=>3,
        ]);
        DepositTypeInterestPaymentMethod::create([
            'deposit_type_id'=>4,
            'interest_payment_method_id'=>3,
        ]);

        SettlementMethod::create(['name'=>'Renew principal and interest']);
        SettlementMethod::create(['name'=>'Renew principal and pay interest to account']);
        SettlementMethod::create(['name'=>'Pay principle and interest to account']);


    }
    protected function C5($IP_method,$depositType,$currency='VND',$s1,$s3,$s6,$s12){
        $limit=[];
        if($IP_method==3){ // cuối kì
            $limit[]=['from'=>0,'to'=>300];
            $limit[]=['from'=>300,'to'=>3000];
            $limit[]=['from'=>3000,'to'=>10000];
            $limit[]=['from'=>10000,'to'=>50000];
            $limit[]=['from'=>50000,'to'=>0];
        }elseif ($IP_method==2){ // đầu kỳ
            $limit[]=['from'=>0,'to'=>5000];
            $limit[]=['from'=>5000,'to'=>0];
        }elseif ($IP_method==1){ // định kỳ
            $limit[]=['from'=>1,'to'=>0];
            $limit[]=['from'=>3,'to'=>0];
            $limit[]=['from'=>6,'to'=>0];
            $limit[]=['from'=>12,'to'=>0];
        }


        foreach ($limit as $index=>$item){
            if($index===1){ $a=0.21;}elseif($index===2){ $a=0.29;}elseif($index===3){ $a=0.33;}elseif($index===4){ $a=0.4;}else{$a=0.15;}
            SavingInterestRate::create([
                'from'=>$item['from'],  // mức tiền: 10.000 = 1
                'to'=>$item['to'],
                'currency'=>$currency,
                'interest_payment_method_id'=>$IP_method,
                'deposit_type_id'=>$depositType,
                'p_1'=>$IP_method==1?null:$s1+$a,
                'p_2'=>$IP_method==1?null:$s1+$a,
                'p_3'=>$IP_method==1 && $index!==0?null:$s3+$a,
                'p_4'=>$IP_method==1 && $index!==0?null:$s3+$a,
                'p_5'=>$IP_method==1 && $index!==0?null:$s3+$a,
                'p_6'=>$IP_method==1 && $index==1 || $index==0 || $IP_method!==1?$s6+$a:null,
                'p_7'=>$IP_method==1 && $index!==0?null:$s6+$a,
                'p_8'=>$IP_method==1 && $index!==0?null:$s6+$a,
                'p_9'=>$IP_method==1 && $index==1|| $index==0  || $IP_method!==1?$s6+$a:null,
                'p_10'=>$IP_method==1 && $index!==0?null:$s6+$a,
                'p_11'=>$IP_method==1 && $index!==0?null:$s6+$a,
                'p_12'=>$IP_method==1 && $index==1 || $index==2 || $index==0  ||  $IP_method!==1?$s12+$a:null,
                'p_13'=>$IP_method==1 && $index!==0?null:$s12+$a,
                'p_15'=>$IP_method==1 && $index==1 || $index==0  || $IP_method!==1?$s12+$a:null,
                'p_18'=>$IP_method==1 && $index==1 || $index==2 || $index==3 || $index==0 ||  $IP_method!==1?$s12+$a:null,
                'p_24'=>$IP_method==1 && $index==1 || $index==2 || $index==3 || $index==0 ||  $IP_method!==1?$s12+$a:null,
                'p_36'=>$IP_method==1 && $index==1 || $index==2 || $index==3 || $index==0 ||  $IP_method!==1?$s12+$a:null,
            ]);
        }
    }

}
