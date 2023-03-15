<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Secret extends Model
{
    use HasFactory;
    protected $table='user_secret';
    protected  $fillable=[
        'CMND_CCCD',
        'old_CMND_CCCD',
        'secret_question',
        'selfie',
        'CMND_CCCD_IMG_BEFORE',
        'CMND_CCCD_IMG_AFTER',
        'relative_phone_1',
        'relative_phone_2',
        'salary',
        'user_id',
    ];
}
