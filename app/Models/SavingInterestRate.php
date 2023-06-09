<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavingInterestRate extends Model
{

    const FIXED_INTERST_RATE=0.8;
    const MONTHLY=1;
    const OTHERS=[3,6,12];
    const TERMS=[1,2,3,4,5,6,7,8,9,10,11,12,13,15,18,24,36];
    use HasFactory;
    protected $table='saving_interest_rate';
    protected $fillable=[
        'from',  // mức tiền: 10.000 = 1
        'to',
        'currency',
        'interest_payment_method_id',
        'deposit_type_id',
        'p_0',
        'p_1',
        'p_2',
        'p_3',
        'p_4',
        'p_5',
        'p_6',
        'p_7',
        'p_8',
        'p_9',
        'p_10',
        'p_11',
        'p_12',
        'p_13',
        'p_15',
        'p_18',
        'p_24',
        'p_36',
    ];

    public function DepositType(){
        return $this->belongsTo(DepositType::class);
    }
}
