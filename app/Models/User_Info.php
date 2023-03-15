<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Info extends Model
{
    use HasFactory;
    protected $table='user_info';
    protected  $fillable=[
        'user_id',
        'name',
        'birth_date',
        'current_address',
        'nationality',
        'user_id',
        'user_id',

    ];
}
