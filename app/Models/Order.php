<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
      'grand_total', 'status','shipping_address','telephone'
    ];
    public function Products(){
        return $this->belongsToMany(Product::class,'orders_products')->withPivot();
    }
}
