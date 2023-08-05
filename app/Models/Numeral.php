<?php

namespace App\Models;

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
}
