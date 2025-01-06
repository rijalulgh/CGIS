<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
    protected $casts = [
        'data' => 'array', // Laravel akan otomatis mengkonversi data JSON menjadi array atau objek
    ];

}
