<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceCardAccount extends Model
{
    use HasFactory;
    protected $table='balance_card_account';
    protected  $fillable=[
        'balance',
        'card_account_connection_id',
    ];
}
