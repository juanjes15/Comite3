<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reglamento extends Model
{
    protected $fillable = [
        'reg_descripcion',
        'reg_tipo',
    ];
}