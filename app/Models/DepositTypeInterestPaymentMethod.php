<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositTypeInterestPaymentMethod extends Model
{
    use HasFactory;
    protected $table='deposit_type_ipm';
    protected $fillable=[
        'deposit_type_id',
        'interest_payment_method_id'
    ];

//    public function DepositType(){
//        return $this->hasMany(DepositType::class,'id','deposit_type_id');
//    }
//    public function InterestPaymentMethod(){
//        return $this->hasMany(InterestPaymentMethod::class);
//    }
}
