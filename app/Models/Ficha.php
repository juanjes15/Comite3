<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $fillable = [
        'fic_inicioLectiva',
        'fic_finLectiva',
        'fic_inicioProductiva',
        'fic_finProductiva',
        'fic_modalidad',
        'fic_jornada',
        'pro_id',
    ];
}
