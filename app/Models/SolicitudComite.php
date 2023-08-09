<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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


    public function comite():BelongsTo
    {
        return $this->belongsTo(Comite::class, 'com_id');
    }

    public function instructors():BelongsToMany
    {
        return $this->belongsToMany(Instructor::class, 'ins_id');
    }


}
