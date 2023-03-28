<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestPaymentMethod extends Model
{
    use HasFactory;
    protected $table='interest_payment_method';
    protected $fillable=[
        'name'
    ];

    public function DepositType(){
        return $this->belongsToMany(DepositType::class,'deposit_type_ipm');
    }

}
