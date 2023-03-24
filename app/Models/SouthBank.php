<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SouthBank extends Model
{
    use HasFactory;

    const INFO=[
        "id" => 2204,
        "name" => "Ngân hàng T2204M T1",
        "code" => "TT1",
        "bin" => "220401",
        "shortName" => "SouthBank",
        "logo" => "https://laravel.com/img/logomark.min.svg",
        "transferSupported" => 1,
        "lookupSupported" => 1,
        "short_name" => "SouthBank",
        "support" => 3,
        "isTransfer" => 1,
        "swift_code" => "SBVNVX"
    ];
}
