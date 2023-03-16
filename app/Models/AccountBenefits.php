<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountBenefits extends Model
{
    use HasFactory;
    protected $table='account_benefits';
    protected  $fillable=[
        'account_type_id',
        'name',
        'description',
    ];
}
