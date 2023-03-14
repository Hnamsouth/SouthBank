<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;
    protected $table='accounts';
    protected $fillable=[
      'account_number',
      'balance',
      'status',
      'user_id',
      'account_type',
    ];

    public function User(){ return $this->belongsTo(User::class,'user_id','id');}
    public function Account_Type(){ return $this->hasOne(Account_Type::class,'account_type','id');}

//    benefit(Tiết kiệm),fees(Phí),
//
    public function Benefitciaries(){ return $this->hasMany(Benefitciaries::class,'benefitciaries_id','id');}
    public function Transactions(){ return $this->hasMany(Benefitciaries::class,'benefitciaries_id','id');}

}
