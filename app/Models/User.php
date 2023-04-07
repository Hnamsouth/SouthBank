<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'status',
        'api_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function UserInfo(){
        return $this->hasOne(User_Info::class);
    }
    public function UserTransSecret(){
        return $this->hasOne(UserTransSecret::class);
    }

    public function Cards(){
        return $this->hasMany(Cards::class);
    }
    public function Accounts(){
        return $this->hasMany(Accounts::class);
    }

    public function Admin(){
        return $this->hasOne(Admin::class);
    }

    public function isAdministrator(){
        $admin = $this->Admin;
        if($admin && in_array($admin->role,Admin::ADMINISTRATOR)){
            return true;
        }
        return false;
    }

    public function scopeSearchByUserName($query,$username){
        if($username && $username !=""){
            return $query->where('username','like',$username);
        }
        return $query;
    }

    public function retrieveByToken($identifier, $token)
    {
        return $this->where('id', $identifier)
            ->where('api_token', $token)
            ->first();
    }

    public function DepositAccount(){
        return $this->hasMany(DepositAccount::class);
    }

    public function getJWTIdentifier()
    {
        // TODO: Implement getJWTIdentifier() method.
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        // TODO: Implement getJWTCustomClaims() method.
        return [];
    }
}
