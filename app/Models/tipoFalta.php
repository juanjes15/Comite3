<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class tipoFalta extends Model
{
    protected $fillable = [
        'tpf_observaciones',
        'tpf_numero',
        'tpf_descripcion',
        'tpf_tipo',
    ];


    /**
     * Get the tipoFalta that owns the tipoFalta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articuloReglamento(): BelongsTo
    {
        return $this->belongsTo(articuloReglamento::class, 'arti_id');
    }



}
