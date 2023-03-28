<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $table='transactions_history';

    protected $fillable=[
        'to_number',
        'amount',
        'fees',
        'status',
        'description',
        'transaction_type_id',
        'from_number',
        'bank_name',
        'account_holder_name',
    ];

    public function scopeSearch($query,$acc_number){
        if($acc_number && $acc_number!=""){
            return $query->where('to_number','=',$acc_number)
                ->orWhere('from_number','=',$acc_number)->orderBy('created_at');
        }
        return $query;
    }
    public function TransactionType(){
        return $this->hasOne(TransactionType::class,'id','transaction_type_id');
    }
}
