<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;
    protected $table='accounts';
    protected $fillable=[
      'account_number',
      'status',
      'user_id',
      'account_type_id'
    ];

    public function scopeSearch($query,$account_number){
        if($account_number && $account_number!=""){
            return $query->where('account_number','=',$account_number);
        }
        return $query;
    }
    public function DepositAccount(){
        return $this->hasMany(DepositAccount::class,'source_account_id','id');
    }

    public function User(){ return $this->belongsTo(User::class,'user_id','id');}

    public function AccountType(){
        return $this->belongsTo(AccountType::class);
    }
    public function BalanceCardAccount(){
        return $this->hasOne(BalanceCardAccount::class,'account_id','id');
    }
}
