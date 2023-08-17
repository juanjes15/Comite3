<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use \Illuminate\Database\Eloquent\Relations\HasOne;

class Instructor extends Model
{
    protected $fillable = [
        'ins_identificacion',
        'ins_nombres',
        'ins_apellidos',
        'ins_email',
        'ins_telefono',
    ];

    /**
     * Get all of the comites for the Instructor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comites(): HasMany
    {
        return $this->hasMany(Comite::class, 'com_id');
    }


    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    /**
     * Get the instructor that owns the Comite
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function solicitudcomite(): HasOne
    {
        return $this->hasOne(SolicitudComite::class, 'sol_id');
    }
    public function fichas(): HasMany
    {
        return $this->hasMany(Ficha::class, 'ins_id');
    }
}