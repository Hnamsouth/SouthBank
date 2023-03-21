<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCardType extends Model
{
    use HasFactory;
    protected $table='credit_card_type';
    protected  $fillable=[
        'name',
        'img',
        'description',
        'limit',
        'special_feature',
        'annual_fees',
        'interest_rate',
        'account_type_id',
    ];
}
