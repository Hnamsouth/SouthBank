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
      'status',
      'user_id',
      'account_type_id'
    ];

    public function User(){ return $this->belongsTo(User::class,'user_id','id');}

    public function AccountType(){
        return $this->belongsTo(AccountType::class);
    }
}
