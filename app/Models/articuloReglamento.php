<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class articuloReglamento extends Model
{
    protected $fillable = [
        'arti_numero',
        'arti_descripcion',
        'arti_numero',
        'arti_falta',
        'tpf_id',
    ];

     /**
     * Get all of the aprendizs for the Ficha
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipofalta(): HasMany
    {
        return $this->hasMany(tipoFalta::class, 'tpf_id');
    }
}
