<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceCardAccount extends Model
{
    use HasFactory;
    protected $table='balance_card_account';
    protected  $fillable=[
        'balance',
        'account_id',
        'card_id',
    ];

    public function Accounts(){
        return $this->belongsTo(Accounts::class);
    }
    public function scopeSearch($query,$acc){
        if($acc && $acc!=''){
            return $query->where('account_id','=',$acc);
        }
        return $query;
    }

}
