<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardAccountSecret extends Model
{
    use HasFactory;
    protected $table='card_account_secret';
    protected  $fillable=[
        'PIN',
        'card_lock',
        'atm_pos_lock',
        'online_lock',
        'user_card_account_id',
        'account_id',
        'card_id',
    ];
}
