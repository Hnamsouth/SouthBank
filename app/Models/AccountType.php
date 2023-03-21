<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    use HasFactory;


    protected $table='account_type';
    protected  $fillable=[
        'name',
        'name_dev',
        'img',
        'account_benefit_id',
        'special_offer',
        'target_customers',
    ];



    public function scopeSearchByType($query,$name){
        if($name && $name != ""){
            return $query->where('name_dev','like',$name);
        }
        return $query;
    }
    public function CardType(){
        return $this->belongsToMany(CardType::class,'card_account_default_connection');
    }
    public function Account(){
        return $this->belongsTo(Accounts::class);
    }
}
