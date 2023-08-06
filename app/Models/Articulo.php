<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = [
        'art_descripcion',
        'cap_id',
        
    ];

    /**
     * Get the instructor that owns the Comite
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function capitulo(): HasMany
    {
        return $this->hasMany(Capitulo::class, 'cap_id');
    }

    
}
