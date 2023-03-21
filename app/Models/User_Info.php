<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Info extends Model
{
    use HasFactory;
    protected $table='user_info';
    protected  $fillable=[
        'name',
        'phone',
        'date_of_birth',
        'current_address',
        'education_level',
        'nationality',
        'user_id',
    ];
}
