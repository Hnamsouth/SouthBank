<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTransSecret extends Model
{
    use HasFactory;
    protected $table='user_trans_secret';
    protected $fillable=[
        'trans_password',
        'user_id',
        'expires',
    ];


    public function User(){
        return $this->belongsTo(User::class);
    }
}
