<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;
    protected $table='cards';
    protected  $fillable=[
        'card_number',
        'name',
        'expiration_date',
        'start_date',
        'cvv',
        'account_id',
        'status',

    ];
}
