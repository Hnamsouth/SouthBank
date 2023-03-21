<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardAccountDefaultConnection extends Model
{
    use HasFactory;
    protected $table='card_account_default_connection';
    protected  $fillable=[
        'card_type_id',
        'account_type_id'
    ];

    public function cardType()
    {
        return $this->belongsTo(CardType::class);
    }
}
