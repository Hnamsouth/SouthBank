<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoansFeesConditions extends Model
{
    use HasFactory;
    protected $table='loans_fees_conditions';
    protected  $fillable=[
        'name',
        'description'
    ];
}
