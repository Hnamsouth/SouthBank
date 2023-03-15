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
        'account_benefit_id',
        'special_offer',
        'target_customers',
    ];
}
