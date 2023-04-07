<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class
DepositType extends Model
{
    use HasFactory;

    protected $table='deposit_type';

    protected  $fillable=[
        'name',
        'min_term',
        'max_term',
        'min_amount',
        'withdraw_before_maturity',
        'increase_principal',
        'img'
    ];

    public function InterestPaymentMethod(){
        return $this->belongsToMany(InterestPaymentMethod::class,'deposit_type_ipm');
    }

    public function SavingInterestRate(){
        return $this->hasMany(SavingInterestRate::class);
    }
}
