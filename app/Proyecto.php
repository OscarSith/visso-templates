<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
    	'proy_nombre',
		'proy_descripcion',
		'proy_thumb_imagen',
		'proy_imagen_default',
		'proy_logotipo',
		'proy_galeria',
    ];
}