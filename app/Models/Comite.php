<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comite extends Model
{
    protected $fillable = [
        'com_fechaSolicitud',
        'com_descripcionSolicitud',
        'com_tipoFalta',
        'com_carpetaAnexos',
        'com_acta',
        'com_estado',
        'com_recomendacion',
        'ins_id',
    ];

    /**
     * Get the instructor that owns the Comite
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function instructor(): BelongsTo
    {
        return $this->belongsTo(Instructor::class, 'ins_id');
    }




    /**
     * Get the instructor that owns the Comite
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'user_id');
    }

}