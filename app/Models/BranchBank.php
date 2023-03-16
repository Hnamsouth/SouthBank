<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchBank extends Model
{
    use HasFactory;
    protected $table='branch_bank';
    protected  $fillable=[
        'name',
        'city',
        'district',
        'address',
    ];
}
