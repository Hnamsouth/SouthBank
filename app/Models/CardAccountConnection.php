<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardAccountConnection extends Model
{
    use HasFactory;
    protected $table='card_account_connection';
    protected  $fillable=[
        'card_id',
        'account_id'
    ];
}
