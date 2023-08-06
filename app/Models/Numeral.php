<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Numeral extends Model
{
    protected $fillable = [
        'num_descripcion',
        'num_tipofalta',
        'num_calificacion',
    ];

    public function solicitudcomite():BelongsToMany
    {
        return $this->belongsToMany(SolicitudComite::class, 'sol_id');
    }

    /**
     * Get the instructor that owns the Comite
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articulo(): HasMany
    {
        return $this->hasMany(Articulo::class, 'art_id');
    }


}
