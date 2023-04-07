<?php

namespace App\Http\Controllers\User\Account;

use App\Http\Controllers\Controller;
use App\Models\Accounts;
use App\Models\BalanceCardAccount;
use App\Models\DepositAccount;
use App\Models\DepositType;
use App\Models\InterestPaymentMethod;
use App\Models\SavingInterestRate;
use App\Models\SettlementMethod;
use App\Models\Transactions;
use App\Models\UserTransSecret;
use App\Rules\AvailableBalance;
use App\Rules\TransPassword;
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
        try {
            $request->validate([
              "interest_payment_method" => ['required'],
              "source_account" =>  ['required'],
              "amount" =>  ['required','numeric',new AvailableBalance(Accounts::Search($request->get('source_account'))->first()->id)],
              "terms" =>  ['required','numeric'],
              "account_receive" =>  ['required'],
              "settlement_method" => ['required','exists:settlement_method,id'],
              "conditions" =>  ['required'],
              "trans_password" =>  ['required',new TransPassword()],
            ]);
            $ipm=$request->get('interest_payment_method');
            $ipp=0;
            $check= $ipm!==2 && $ipm!==3;
            if($check){
                $ipp=(int)substr($ipm,2,1);
            }
            $date=Carbon::now();
            $d2=$date;
            $sa=Accounts::Search($request->get('source_account'))->first();
            $an=Carbon::now()->getTimestamp();
            $am=$request->get('amount');
            $da=DepositAccount::create([
                'account_number'=>$an,
                'initial_amount'=>$am,
                'current_balance'=>$am,
                'terms'=>$request->get('terms'),
                'interest_payment_period'=>$check?$ipp:null,  // ky tra lai
                'interest_payment_method_id'=>$check?1:$ipm,  // phuong thuc
                'open_date'=>$date,
                'close_date'=>$d2->addMonths((int)$request->get('terms')),
                'days'=>0,
                'profit'=>0,
                'saving_deposit_type'=>'VND',
                'deposit_type_id'=>$request->get('deposit_type'),
                'source_account_id'=>$sa->id,
                'account_receive_id'=>Accounts::Search($request->get('account_receive'))->first()->id,
                'status'=>1,
                'settlement_method_id'=>$request->get('settlement_method'),
                'settlement_channel'=>'online',
                'user_id'=>auth()->user()->id,
            ]);
            if($da->id){
                $bl=BalanceCardAccount::where('account_id',$sa->id)->decrement('balance',$am);
                if($bl){
                    $trans=Transactions::create([
                        'to_number'=>$an,
                        'amount'=>$am,
                        'fees'=>0,
                        'status'=>1,
                        'description'=>"",
                        'transaction_type_id'=>5,
                        'from_number'=>$sa->account_number,
                        'account_holder_name'=>$sa->User->UserInfo->name,
                    ]);
                    if($trans->id){
                        return response()->json(['status'=>true]);
                    }else{
                        DepositAccount::find($da->id)->delete();
                        BalanceCardAccount::where('account_id',$sa->id)->increment('balance',$am);
                        return response()->json(['status'=>"Transaction not completed"]);
                    }
                }else{
                    DepositAccount::find($da->id)->delete();
                    return response()->json(['status'=>"Source account or amount incorrect"]);
                }
            }


        }catch (Throwable $e){
            return response()->json(['status'=>$e]);
        }
    }

    public function SettlementTerm_Saving(){
        $dacc= auth()->user()->DepositAccount->where('status',1);
        $acc=auth()->user()->Accounts;
        return view('customer.forAuth.saving.settle-term-dep',compact('dacc','acc'));
    }
    public function handle_SettlementTerm_Saving(Request $request){

        try {
            $request->validate([
                'deposit_acc'=>['required'],
                'acc_to_receive'=>['required'],
                "trans_password" =>  ['required',new TransPassword()]
            ]);

            $dacc=DepositAccount::Search($request->get('deposit_acc'))->first();
            $acc=Accounts::Search($request->get('acc_to_receive'))->first();
            $data=$this->profits($dacc);

            $ipm=$dacc->interest_payment_method_id;
            $init=$ipm===InterestPaymentMethod::INTEREST_PAID_PERIODICALLY || $ipm===InterestPaymentMethod::PREPAID_INTEREST?
                $dacc->initial_amount-$data['receive']+$data['pay']:$dacc->initial_amount+$data['pay'];
            BalanceCardAccount::Search($acc->id)->increment('balance',$init);

            $dacc->update([
                'status'=>false
            ]);
            Transactions::create([
                'to_number'=>$request->get('acc_to_receive'),
                'amount'=>$init,
                'fees'=>0,
                'status'=>1,
                'description'=>"Finalize savings account",
                'transaction_type_id'=>5,
                'from_number'=>$dacc->account_number,
                'account_holder_name'=>$dacc->DepositType->name,
            ]);

            $acc=auth()->user()->Accounts;
            return response()->json(['status'=>true]);
//            return redirect()->route('user.account.list',compact('acc'));
        }catch (Throwable $e){
            return response()->json(['status'=>$e]);
        }



    }

    public function checkAcc_Saving(Request $request){
        try {
            $acc=$request->get('dacc');
            $dacc=DepositAccount::Search($acc)->first();
            $profit=$this->profits($dacc);

            $data['init_amount']=$dacc->initial_amount;
            $data['terms']=$dacc->terms;
            $data['profit']=$profit;
            $data['open_date']=$dacc->open_date;
            $data['end_date']=$dacc->close_date;
            $data['settlement_method']=SettlementMethod::find($dacc->settlement_method_id)->name;
            $data['mess']=$profit['status_wbm']?'':'Your savings account has not reached its maturity date.Interest will be calculated with fixed interest rate. Previously paid payments will be deducted from the principal';
            return response(['status' => $dacc->status===1,'acc_to_receive'=>$dacc->AccountReceive->account_number,'data'=>$data]);
        }catch (Throwable $e){
            return response(['status' => $e]);
        }
    }

    public function profits($dacc){

        try {
            $ipm=$dacc->interest_payment_method_id;
            $ipp=$dacc->interest_payment_period;
            $date1 = Carbon::parse($dacc->open_date);
            $date2 = Carbon::parse($dacc->close_date);
            $daysOfTerm = $date1->diffInDays($date2);
            $interest=0.0;
            $profit=0.0;
            if($ipm===InterestPaymentMethod::INTEREST_PAID_PERIODICALLY){ //định kỳ t-1
                $data['status_wbm']=false;
                $sir=SavingInterestRate::where('deposit_type_id','=',$dacc->deposit_type_id)
                    ->where('from','=',$ipp)
                    ->first();

                if($daysOfTerm > $dacc->days){ // rut truoc han
                    // tinh tien lai da tra
                   $d4=Carbon::parse($dacc->open_date)->addDays($dacc->days);
                   $month=$date1->diffInMonths($d4);
                   $t=(int)$month/$ipp;
                    $i=1;
                    $l=0;
                    foreach (SavingInterestRate::TERMS as $index=>$term){
                        if($i==$t){ break;}
                        if($ipp===SavingInterestRate::MONTHLY && $t>=1){
                            $profit+=$dacc->initial_amount*$sir['p_'.strval(max($term, 3))]/100/12;
                            $i++;
                        }elseif($term > $ipp
                            && $t>=1
                            && $term%$ipp==0 || ($ipp>12 && $term==18)
                            && in_array($ipp,SavingInterestRate::OTHERS))
                        {
                            $profit+=$dacc->initial_amount*$sir['p_'.strval($term)]/100/12*($i==0?$term:$term-$l);
                            $i++;
                            $l=$term;
                        }
                    }
                    $data['receive']=$profit;
                    $data['pay']=$dacc->initial_amount*SavingInterestRate::FIXED_INTERST_RATE/100/12*$month;
                }elseif ($daysOfTerm===$dacc->days){
                    $data['status_wbm']=true;
                    $data['pay']=$dacc->initial_amount*$sir['p_'.strval($dacc->terms)]/100/12;
                }

            }elseif ($ipm===InterestPaymentMethod::PREPAID_INTEREST || $ipm===InterestPaymentMethod::INTEREST_PAID_AT_MATURITY){ // đầu kỳ & cuoi ky
                $sir=SavingInterestRate::where('deposit_type_id','=',$dacc->deposit_type_id)
                    ->where('interest_payment_method_id','=',$ipm)
                    ->where('from','<=',$dacc->initial_amount)
                    ->get()->last();
                $data['status_wbm']=$daysOfTerm===$dacc->days;
                if(!$data['status_wbm']){
                    $data['receive']=$dacc->initial_amount*SavingInterestRate::FIXED_INTERST_RATE/100*$dacc->days/360;
                }
                $data['pay']=$dacc->initial_amount*$sir['p_'.$dacc->terms]/100*$dacc->days/360;
            }
            return $data;
        }catch (Throwable $e){
            return $e;
        }
    }
}
