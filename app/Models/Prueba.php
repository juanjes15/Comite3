<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;

    protected $fillable = [
        'pru_tipo',
        'pru_descripcion',
        'pru_fecha',
        'pru_url',
        'sol_id',
    ];

    public function solicitudComite()
    {
        return $this->belongsTo(SolicitudComite::class, 'sol_id');
    }
}
