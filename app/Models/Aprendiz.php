<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aprendiz extends Model
{
    protected $fillable = [
        'apr_identificacion',
        'apr_nombres',
        'apr_apellidos',
        'apr_email',
        'apr_telefono',
        'apr_direccion',
        'apr_fechaNacimiento',
        'fic_id',
    ];

    /**
     * Get the ficha that owns the Aprendiz
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ficha(): BelongsTo
    {
        return $this->belongsTo(Ficha::class, 'fic_id');
    }


    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}