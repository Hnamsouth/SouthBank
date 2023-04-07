<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositAccount extends Model
{
    use HasFactory;
    protected $table='deposit_account';
    protected  $fillable=[
        'account_number',
        'initial_amount',
        'current_balance',
        'terms',
        'interest_payment_period',
        'interest_payment_method_id',
        'open_date',
        'close_date',
        'days',
        'profit',
        'saving_deposit_type',
        'deposit_type_id',
        'source_account_id',
        'account_receive_id',
        'status',
        'settlement_method_id',
        'settlement_channel',
        'user_id'
    ];

    public function DepositType(){
        return $this->hasOne(DepositType::class,'id','deposit_type_id');
    }
    public function SourceAccount(){
        return $this->hasOne(Accounts::class,'source_account_id','id');
    }
    public function AccountReceive(){
        return $this->hasOne(Accounts::class,'id','account_receive_id');
    }
    public function SettlementMethod(){
        return $this->hasOne(SettlementMethod::class);
    }
    public function Accounts(){
        return $this->belongsTo(Accounts::class);
    }

    public function Users(){
        return $this->belongsTo(User::class);
    }

//

    public function scopeSearch($query,$acc){
        if($acc && $acc!=''){
            return $query->where('account_number','=',$acc);
        }
        return $query;
    }
}
