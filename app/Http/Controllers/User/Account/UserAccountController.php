<?php

namespace App\Http\Controllers\User\Account;

use App\Http\Controllers\Controller;
use App\Mail\VerifyEmail;
use App\Models\Accounts;
use App\Models\BalanceCardAccount;
use App\Models\Banks;
use App\Models\SouthBank;
use App\Models\Transactions;
use App\Models\UserTransSecret;
use App\Rules\AvailableBalance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Exception;

class UserAccountController extends Controller
{
    //
    public function __construct()
    {

    }

    public function showUserAccounts(){
        $acc=auth()->user()->Accounts;
        return view('customer.forAuth.user_account_list',compact('acc'));
    }

    /**
     * @param Accounts $account
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showAccountDetails(Accounts $account,Request $request){
        //        get transaction
        $trans=Transactions::Search($account->account_number)->with('TransactionType')->paginate();
        $json=json_encode($trans);
        return view('customer.forAuth.account.acc_detail',compact('account','trans','json'));
    }

     public function showTransferWithinBank(){
        //        get accounts
         $acc=auth()->user()->Accounts;
        //        get banks
         $banks[]=SouthBank::INFO;
         $banks[]=Banks::orderBy('shortName','asc')->get();
        //        dd($banks);
        return view('customer.forAuth.transfer.transfer_within_bank',compact('banks','acc'));
     }
     public function handleTransfer(Request $request){

         $request->validate([
             "bank" => ["required","numeric"],
              "account_number" =>["required",function ($attribute, $value, $fail) use ($request) {
                  if ($value === $request->get('from_account')) {
                      $fail('Cannot send to the same account');
                  }
              }],
              "account_holder_name" => ["required","string"],
              "from_account" => ["required","exists:accounts,account_number"],
              "amount" => ["required","numeric","min:5000",new AvailableBalance(Accounts::Search($request->get('from_account'))->first()->id)],
              "currency" =>  ["required"],
              "description" => ["nullable" ,"string"],
              "trans_password" => ["required","exists:user_trans_secret,trans_password"],
         ],[
             "from_account:exists"=>"Transfer account does not exist.",
             "trans_password:exists"=>"invalid transfer password.",
         ]);
//        dd($request);
        $from_id=Accounts::Search($request->get('from_account'))->first()->id;
        $to_id=Accounts::Search($request->get('account_number'))->first()->id;
        $amount=$request->get('amount');

        BalanceCardAccount::where('account_id',$to_id)->increment('balance',$amount);
        BalanceCardAccount::where('account_id',$from_id)->decrement('balance',$amount);

        $transId=random_int(121212,989898);
        $bin=$request->get('bank');
        Transactions::create([
            'transaction_code'=>$transId,
            'to_number'=>$request->get('account_number'),
            'amount'=>$request->get('amount'),
            'fees'=>0,
            'status'=>1,
            'description'=>$request->get('description'),
            'transaction_type_id'=>1,
            'from_number'=>$request->get('from_account'),
            'bank_name'=>$bin==SouthBank::INFO['bin']?SouthBank::INFO['name']:Banks::where('bin','=',$bin)->first()->name,
            'account_holder_name'=>$request->get('account_holder_name'),
        ]);

        return redirect()->route('user.transfer.end',['transId'=>$transId]);

     }
    public function showTransferOutsideBank(){
//        get banks list
        $banks=array();
        $banks[]=SouthBank::INFO;
        $banks[]=Http::get('https://api.vietqr.io/v2/banks')->json()['data'];
//        dd($bank);
    }

    protected function showTransferEnd($transId){
       $trans= Transactions::where('transaction_code','=',$transId)->first();

       return view('customer.forAuth.transfer.transfer_finish',compact('trans'));

    }
    public function SearchAccount(Request $request){
        if($request->get('bin')!==SouthBank::INFO['bin']){

            try{
                $acc=Accounts::with('User')->Search($request->get('account_number'))->first();
                if($acc!=[]){
                    $data['name']=$acc->User->UserInfo->name;
                    return $data;
                }
            }catch (Exception $e){
                return "not found";
            }
            return 1;
        }else{
            try {
                $response=Http::post('https://api.vietqr.io/v2/lookup',[
                    'headers' => [
                        'x-client-id' =>env('VIETQR_ID'),
                        'x-api-key' => env('VIETQR_KEY'),
                        'Content-Type' => 'application/json'
                    ],
                    'json' => [
                        'bin' => (int)$request->get('bin'),
                        'accountNumber' => (int)$request->get('account_number')
                    ]
                ]);
                return $response;
            }catch (\Exception $e){}
            return 1;
        }
    }
    protected function GTransPW(Request $request){
        try {
            $transpw=random_int(123000,989898);
            $user=auth()->user();
//            $user_trans=UserTransSecret::where('user_id','=',$user->id)->first();
//            if($user_trans->expires->greaterThan(now())){
//                return 3;
//            }
            UserTransSecret::updateOrCreate([
                'trans_password'=>$transpw,
                'user_id'=>$user->id,
                'expires'=>Carbon::now()->addMinutes(1),
            ]);

            Mail::to($user->email)->send(new VerifyEmail($transpw));
            return 0;
        }catch (Exception $e){}
        return 1;
    }
    protected function CheckTransPW(Request $request){
        try {
           $uTrans= UserTransSecret::where('trans_password','=',$request->get('transfer_pw'))->first();
            return isset($uTrans->id) ? 0 : 1;
        }catch (Exception $e){}
        return 1;
    }
}
