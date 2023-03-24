<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    use HasFactory;
    protected $table='transaction_type';
    protected  $fillable=[
        'name',
        'code'
    ];
    public function Transactions(){
        return $this->belongsTo(Transactions::class);
    }
}
