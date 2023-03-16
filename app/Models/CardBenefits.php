<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardBenefits extends Model
{
    use HasFactory;
    protected $table='card_benefits';
    protected  $fillable=[
        'benefit_new_card',
        'benefit_using_card',
        'benefit_additional_card',
        'credit_card_type_id',
        'debit_card_type_id'
    ];
}
