<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function scopeGetBySub($q, $marca_id, $subValue = 1)
    {
    	return $q->where('cat_sub', $subValue)->where('marca_id', $marca_id)->where('cat_estado', 1)->get(['id', 'cat_nombre', 'cat_imagen', 'cat_parent']);
    }
}
