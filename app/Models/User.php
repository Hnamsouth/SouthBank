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
        'name',
        'email',
        'password',
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


//    $this->hasOne() quan hệ, 1 - 1
//    $this->hasMany()  quan hệ, 1 - nhiều
//    $this->belongsTo() , quan hệ, 1 -1 or 1 - nhiều
//    $this->belongsToMany() , quan hệ nhiều nhiều

//    $this->hasManyThrough() , lấy dữ liệu thông qua nhiều bảng trung gian
//    $this->hasOneThrough() , lấy dữ liệu thông qua 1 trung gian

//     Quan hệ đa hình là một model có thể có quan hệ với nhiều model khác nhau trên một cột (không cần thông qua kết nối giữa khóa chính và khóa ngoại).
//    $this->morphOne() quan hệ đa hình 1-1 ,
//     $this->morphMany() quan hệ đa hình 1- nhiều,
//     $this->morphToMany()  quan hệ đa hình nhiều - nhiều,
//     $this->morphTo()  nghịch đảo.
//      vd:
// 1 bài viết sẽ có nhiều hình ảnh
//class Post extends Model{   public function images(){   return $this->morphMany(Image::class, 'imageable'); }   }
//  khi gọi hàm images() nó sẽ trả về tất cả record có của bảng images có trùng 1 cap khóa ngoại của 2 bảng image và post thông qua bảng trung gian imageable
//  1 hình ảnh có thể sử dụng trong nhiều bài viết hoặc sản phẩm hoặc user
//class Image extends Model{  public function imageable(){    return $this->morphTo();    }   }


//  has many acc, card, deposit(saving), loan, transaction
//hasone(one to one)  user_info, user_secret,

    public function Cards(){
        return $this->hasMany(Cards::class);
    }
    public function Accounts(){
        return $this->hasMany(Accounts::class);
    }

    public function Admin(){
        return $this->hasOne(Admin::class);
    }
    public function isAdmin(){
        $admin = $this->Admin;
        if($admin && $admin->role == Admin::ADMIN){
            return true;
        }
        return false;
    }
    public function isAdministrator(){
        $admin = $this->Admin;
        if($admin && in_array($admin->role,Admin::ADMINISTRATOR)){
            return true;
        }
        return false;
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
