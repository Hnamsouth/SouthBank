<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $table='transactions_history';

    protected $fillable=[
        'transaction_code',
        'to_number',
        'amount',
        'fees',
        'status',
        'description',
        'transaction_type_id',
        'from_number',
    ];
}
