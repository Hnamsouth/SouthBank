<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountSecret extends Model
{
    use HasFactory;
    protected $table='';
    protected  $fillable=[

    ];
    protected $hidden=[
        'online_lock',
        'account_id',
        'online_lock',
    ];
}
