<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialFeatureDebit extends Model
{
    use HasFactory;
    protected $table='special_feature_debit';
    protected  $fillable=[
        'name',
        'description'
    ];
}
