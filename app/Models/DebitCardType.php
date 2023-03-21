<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DebitCardType extends Model
{
    use HasFactory;
    protected $table='debit_card_type';
    protected  $fillable=[
        'name',
        'img',
        'description',
        'special_feature',
    ];

    public function AccountType(){
        return $this->belongsToMany(AccountType::class,'card_account_default_connection');
    }
}
