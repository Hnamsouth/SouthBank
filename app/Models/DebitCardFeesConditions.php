<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DebitCardFeesConditions extends Model
{
    use HasFactory;
    protected $table='debit_card_fees_conditions';
    protected  $fillable=[
        'name',
        'description',
    ];
}
