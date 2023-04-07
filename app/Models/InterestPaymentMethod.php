<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestPaymentMethod extends Model
{

    const INTEREST_PAID_PERIODICALLY=1;
    const PREPAID_INTEREST=2;
    const INTEREST_PAID_AT_MATURITY=3;
    use HasFactory;
    protected $table='interest_payment_method';
    protected $fillable=[
        'name'
    ];

    public function DepositType(){
        return $this->belongsToMany(DepositType::class,'deposit_type_ipm');
    }

}
