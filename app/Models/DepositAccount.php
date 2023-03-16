<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositAccount extends Model
{
    use HasFactory;
    protected $table='deposit_account';
    protected  $fillable=[
        'initial_amount',
        'current_balance',
        'interest_rate',
        'terms',
        'open_date',
        'close_date',
        'days',
        'deposit_type_id',
        'account_id',
        'status',
    ];
}
