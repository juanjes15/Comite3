<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    protected $fillable = [
        'cap_descripcion',
        
    ];

    /**
     * Get the instructor that owns the Comite
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articulo(): BelongsTo
    {
        return $this->belongsTo(Articulo::class, 'art_id');
    }
}
