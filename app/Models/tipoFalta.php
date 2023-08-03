<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class tipoFalta extends Model
{
    protected $fillable = [
        'tpf_capitulo',
        'tpf_descripcion',
        'tpf_tipofalta',
        'tpf_calificacion',

    ];


    /**
     * Get the tipoFalta that owns the tipoFalta
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function articuloReglamento(): HasOne
    {
        return $this->hasOne(articuloReglamento::class, 'arti_id');
    }



}
