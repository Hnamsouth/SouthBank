<?php

namespace App\Http\Controllers\User\Account;

use App\Http\Controllers\Controller;
use App\Models\Accounts;
use App\Models\BalanceCardAccount;
use App\Models\DepositAccount;
use App\Models\DepositType;
use App\Models\SavingInterestRate;
use App\Models\SettlementMethod;
use App\Models\Transactions;
use App\Models\UserTransSecret;
use App\Rules\AvailableBalance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Throwable;

class UserSavingAccController extends Controller
{
    //
    public function showSavingAccList(){
        // list saving deposit type
       $sdt= DepositType::withCount('InterestPaymentMethod')->get();
//       dd($sdt);
//       $sdt= [1,2,3,4,4,5,6,4];

        return view('customer.forAuth.saving.list_type',compact('sdt'));
    }
    public function showFormOpenSavingAcc($id){
        $acc=auth()->user()->Accounts;
        $stm_method=SettlementMethod::all();
        $dt= DepositType::where('id','=',$id)->with('InterestPaymentMethod')->first();

//        dd($dt);
        return view('customer.forAuth.saving.form_open_acc',compact('dt','acc','stm_method'));
    }
    public function CheckAmount_Saving(Request $request){
        try {
            $acc_id=Accounts::Search($request->get('account_number'))->first()->id;
            $blc=BalanceCardAccount::Search($acc_id)->first();
            $dt=DepositType::find($request->get('deposit_type'));
            $am=$request->get('amount');
            $a=$blc->balance > $am;
            $b= $am >= $dt->min_amount*1000000;
            if($a && $b){
                return 1;
            }else if($a && !$b){
                return 2;
            }else if(!$a && $b){
                return 3;
            }else {
                return 0;
            }
        }catch (Throwable $e){

        }
    }
    public function CheckInterestRate(Request $request){

        try {
            $arr=['T-1','T-3','T-6','T-12'];
            $dt=$request->get('deposit_type');
            $i=$request->get('interest_payment_method');
            $ipm=in_array($i,$arr) ? 1 : $i;
            $term=$request->get('term');
            if($ipm==1){
                if($i===$arr[0]){$t=1;}elseif ($i===$arr[1]){$t=3;}elseif ($i===$arr[2]){$t=6;}else{$t=12;}
                $sir=SavingInterestRate::where('deposit_type_id','=',$dt)
                    ->where('from','=',$t)
                    ->first();
                return $sir['p_'.$term];
            }else{
                $am=(int)$request->get('amount')/10000;
                $sir=SavingInterestRate::where('deposit_type_id','=',$dt)
                    ->where('interest_payment_method_id','=',$ipm)
                    ->where('from','<=',$am)
                    ->get()->last();
                return $sir['p_'.$term];
            }


        }catch (Throwable $e){
            report($e);
            return 0;
        }
        return $request;
    }

    public function handleOpenSaving(Request $request){
//        dd($request) ;
        $request->validate([
          "interest_payment_method" => ['required'],
          "source_account" =>  ['required'],
          "amount" =>  ['required','numeric',new AvailableBalance(Accounts::Search($request->get('source_account'))->first()->id)],
          "currency" =>  ['required'],
          "terms" =>  ['required','numeric'],
          "settlement_channel" => ['required'],
          "account_receive" =>  ['required'],
          "settlement_method" => ['required','exists:settlement_method,id'],
          "beneficiary" =>  ['required'],
          "trans_password" =>  ['required', function ($attribute, $value, $fail) use ($request) {
              $ut_pw=UserTransSecret::where('user_id',auth()->user()->id)->first();
              $appointmentTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ut_pw->expires);
              if ($value !=$ut_pw->trans_password ) {
                  $fail('The Transaction password is incorrect.');
              }
              if( $appointmentTime->lt(Carbon::now())){
                  $fail('The Transaction password has expired.');
              }
          },],
        ]);

        try {
            $ipm=$request->get('interest_payment_method');
            $ipp=0;
            $check= $ipm!==2 && $ipm!==3;
            if($check){
                $ipp=(int)substr($ipm,1,1);
            }
            $date=Carbon::now();
            $sa=Accounts::Search($request->get('source_account'))->first();
            $an=Carbon::now()->getTimestamp();
            $am=$request->get('amount');
            DepositAccount::create([
                'account_number'=>$an,
                'initial_amount'=>$am,
                'current_balance'=>$am,
                'terms'=>$request->get('terms'),
                'interest_payment_period'=>$check?$ipp:null,  // ky tra lai
                'interest_payment_method_id'=>$check?1:$ipm,  // phuong thuc
                'open_date'=>$date,
                'close_date'=>$date->addMonths($request->get('terms')),
                'days'=>0,
                'profit'=>0,
                'saving_deposit_type'=>'VND',
                'deposit_type_id'=>$request->get('deposit_type'),
                'source_account_id'=>$sa->id,
                'account_receive_id'=>Accounts::Search($request->get('account_receive'))->first()->id,
                'status'=>1,
                'settlement_method_id'=>$request->get('settlement_method'),
                'settlement_channel'=>$request->get('settlement_channel'),
            ]);
            $bl=BalanceCardAccount::where('account_id',$sa->id)->decrement('balance',$am);
            Transactions::create([
                'to_number'=>$an,
                'amount'=>$am,
                'fees'=>0,
                'status'=>1,
                'description'=>"",
                'transaction_type_id'=>5,
                'from_number'=>$sa->account_number,
                'account_holder_name'=>$sa->User->UserInfo->name,
            ]);
            return redirect()->route('user.account.list');
        }catch (Throwable $e){
            dd($e);
            report($e);
            return back(302);
        }
    }
}
