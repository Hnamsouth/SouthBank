<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoansAccount extends Model
{
    use HasFactory;
    protected $table='loans_account';
    protected  $fillable=[
        'loans_number',
        'loan_amount',
        'remaining_amount',
        'tenor',
        'interest_rate',
        'description',
        'status',
        'loan_date',
        'loan_type_id',
        'account_id',
    ];
}
