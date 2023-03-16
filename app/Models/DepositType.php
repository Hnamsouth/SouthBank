<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositType extends Model
{
    use HasFactory;
    protected $table='deposit_type';
    protected  $fillable=[
        'name',
        'img'
    ];
}
