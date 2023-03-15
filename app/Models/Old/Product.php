<?php

namespace App\Models\Old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $fillable=[
        "name","thumbnail","price","qty","description","unit","status","category_id"
    ];

    public function Category(){
//        $this->belongsTo(Category::class,'category_id','id');
       return $this->belongsTo(Category::class); // nếu để đúng định dạng như trên
    }
    public function Orders(){
        return $this->belongsToMany(Order::class,'orders_products');
    }
    public function scopeSearch($query,$search){ // bắt buộc phải sử dụng scope ở trước tên hàm vd scopeABC...
        if($search && $search != ""){
            return $query->where('name','like',"%$search%")
                ->orWhere('description','like',"%$search%")
                ->orWhere('price','like',"%$search%")
                ->orWhere('unit','like',"%$search%");
        }
        return $query;
    }
    public function scopeCategoryFilter($query,$category_id){
        if($category_id && $category_id  != 0){
            return $query->where('category_id',$category_id);
        }
        return $query;
    }
    public function scopeSearchAll($query,$search,$category_id){
        if($search && $search != ""){
            return $query->where('name','like','%$search%')
                ->orWhere('description','like','%$search%')
                ->orWhere('price','like','%$search%')
                ->orWhere('unit','like','%$search%')
                ->orwhere('category_id',$category_id);
        }
        return $query;
    }
}

