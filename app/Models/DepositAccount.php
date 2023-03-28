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
    ];

    public function DepositType(){
        return $this->hasOne(DepositType::class);
    }
    public function SourceAccount(){
        return $this->hasOne(Accounts::class,'source_account_id','id');
    }
    public function AccountReceive(){
        return $this->hasOne(Accounts::class,'account_receive_id','id');
    }
    public function SettlementMethod(){
        return $this->hasOne(SettlementMethod::class);
    }
    public function Accounts(){
        return $this->belongsTo(Accounts::class);
    }
}
