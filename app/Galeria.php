<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    public function scopeGetByProductId($q, $product_id)
    {
    	return $q->where('producto_id', $product_id)->where('gal_estado', 1)->get(['id', 'pro_imagen_default', 'name', 'description', 'producto_id']);
    }
}
