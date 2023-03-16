<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialFeatureCredit extends Model
{
    use HasFactory;
    protected $table='special_feature_credit';
    protected  $fillable=[
        'name',
        'description'
    ];
}
