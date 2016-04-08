<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function scopeGetByCatID($q, $catID)
    {
    	return $q->where('cat_id', $catID)->where('pro_estado', 1)->get([
    		'id',
    		'pro_nombre',
    		'pro_imagen_default',
    	]);
    }
}