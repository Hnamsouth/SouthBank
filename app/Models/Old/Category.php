<?php

namespace App\Models\Old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';

    protected  $fillable=[
        "name",
        "icon",
        "status",
    ];
    public function Products(){
        return $this->hasMany(Product::class);
    }
}
