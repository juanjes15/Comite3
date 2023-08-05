<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SolicitudComite extends Model
{
    protected $fillable = [
        'sol_fecha',
        'sol_lugar',
        'sol_asunto',
        'sol_asunto',
        'sol_motivo',
        'sol_estado',
    ];

    
    public function numeral():BelongsToMany
    {
        return $this->belongsToMany(Numeral::class, 'num_id');
    }


}
