<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    use HasFactory;
    protected $table='banks';
    protected $fillable=[
        "name",
      "code",
      "bin",
      "shortName",
      "logo",
      "transferSupported",
      "lookupSupported",
      "short_name",
      "support",
      "isTransfer",
      "swift_code",
    ];
}
