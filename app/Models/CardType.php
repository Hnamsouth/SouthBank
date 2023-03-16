<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardType extends Model
{
    use HasFactory;
    protected $table='card_type';
    protected  $fillable=[
        'card_id',
        'credit_card_id',
        'debit_card_id'
    ];
}
