<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositConditions extends Model
{
    use HasFactory;
    protected $table='deposit_conditions';
    protected  $fillable=[
        'name',
        'description'
    ];
}
