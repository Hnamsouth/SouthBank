<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardType extends Model
{
    use HasFactory;
    protected $table='card_type';
    protected  $fillable=[
        'name',
        'type',
        'credit_card_type_id',
        'debit_card_type_id'
    ];

    public function DebitCardType(){
        return $this->belongsTo(DebitCardType::class);
    }
    public function CreditCardType(){
        return $this->belongsTo(CreditCardType::class);
    }
}
