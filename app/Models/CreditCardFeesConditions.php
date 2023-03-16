<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCardFeesConditions extends Model
{
    use HasFactory;
    protected $table='credit_card_fees_conditions';
    protected  $fillable=[
        'issue_fee',
        'annual_card_fee',
        'cash_advance_fee',
        'pin_reissue_fee',
        'card_reissue_fee',
    ];
}
