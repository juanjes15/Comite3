<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $fillable = [
        'pro_codigo',
        'pro_nombre',
        'pro_nivelFormacion',
    ];
}
