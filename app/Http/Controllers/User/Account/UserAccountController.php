<?php

namespace App\Http\Controllers\User\Account;

use App\Http\Controllers\Controller;
use App\Models\Accounts;

class UserAccountController extends Controller
{
    //
    public function __construct()
    {

    }

    public function showUserAccounts(){
        $acc=auth()->user()->Accounts;
//        $account=Accounts::with('AccountType')->first();
//        dd($acc);
        return view('customer.forAuth.user_account_list',compact('acc'));
    }

}
