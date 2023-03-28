<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettlementMethod extends Model
{
    use HasFactory;
    protected $table='settlement_method';
    protected $fillable=[
      'name'
    ];
    public function DepositAccount(){
        return $this->belongsTo(DepositAccount::class);
    }
}
