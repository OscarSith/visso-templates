<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function scopeGetBySub($q, $subValue = 1)
    {
    	return $q->where('cat_sub', $subValue)->where('cat_estado', 1)->get(['id', 'cat_nombre', 'cat_imagen', 'cat_parent']);
    }
}
