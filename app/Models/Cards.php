<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;
    const CTRY_CODE=[
        'MASTER'=>'2204',
        'VISA'=>'1234',
        'LOCAL'=>'9999'
    ];
    const BANK_CODE=[
        'MASTER'=>'99',
        'VISA'=>'88',
        'LOCAL'=>'77'
    ];

    protected $table='cards';

    protected  $fillable=[
        'card_number',
        'name',
        'expiration_date',
        'activation_date',
        'cvv',
        'status',
        'user_id',
        'card_type_id',
    ];
}
