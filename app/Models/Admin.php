<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{

    const ADMIN = 3;
    const MANAGER = 2;
    const STAFF = 1;
//    const CUSTOMER = 0;
    const ADMINISTRATOR = [self::ADMIN,self::MANAGER,self::STAFF];

    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'admins';
    protected $guard  = 'admin';
    protected $fillable=[
        'user_id',
        'role',
        'permission',
    ];

    public function User(){
        return $this->hasOne(User::class);
    }
    public function Role(){
        return $this->hasOne(Role::class);
    }
    public function Permission(){
        return $this->hasOne(Permission::class);
    }


}
