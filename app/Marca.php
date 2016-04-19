<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marca';

    protected $fillable = ['nombre', 'estado'];

    public function scopeGetMarcaId($q, $marcaName)
    {
    	return $q->where('nombre', $marcaName)->pluck('id')->first();
    }
}
