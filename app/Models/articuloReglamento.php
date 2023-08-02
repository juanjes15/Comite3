<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class articuloReglamento extends Model
{
    protected $fillable = [
        'arti_numero',
        'arti_descripcion',
        'arti_prohibiciones',
        'tpf_id',
    ];

     /**
     * Get all of the aprendizs for the Ficha
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipofalta(): BelongsTo
    {
        return $this->belongsTo(tipoFalta::class, 'tpf_id');
    }
}
