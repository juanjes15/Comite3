<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudComite extends Model
{
    use HasFactory;

    protected $table = 'solicitud_comite';

    protected $fillable = [
        'sol_fecha',
        'sol_lugar',
        'sol_asunto',
        'sol_motivo',
        'sol_estado',
        'ins_id',
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'ins_id');
    }
}

