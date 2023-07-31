<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoFalta extends Model
{
    protected $fillable = [
        'tpf_observaciones',
        'tpf_numero',
        'tpf_descripcion',
        'tpf_tipo',
    ];
}
