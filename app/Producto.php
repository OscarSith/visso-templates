<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'pro_nombre',
        'pro_descripcion',
        'pro_imagen_default',
        'pro_estado'
    ];

    public function scopeGetByCatID($q, $catID)
    {
    	return $q->where('cat_id', $catID)->where('pro_estado', 1)
    	->get([
    		'id',
    		'pro_nombre',
    		'pro_descripcion',
    		'pro_imagen_default',
    	]);
    }
}
