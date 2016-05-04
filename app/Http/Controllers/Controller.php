<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use File;
use Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * En caso de que el nombre de la categoria esté con linea en medio,
     * agregado por la funcion str_slug()
     * @param  string $cat_name
     * @return string
     */
    protected function strSlugInverse($cat_name)
    {
        $arr = explode('-', $cat_name);
        if (count($arr) > 1) {
            $cat_name = implode(' ', $arr);
        }

        return $cat_name;
    }

    protected function uploadPhoto($request, $imagen_name, $type = 'categorias')
    {
        // Renombrando la imagen
        $file = $request->file($imagen_name);
        $imageName = strtolower(str_random(4)) . '_' . str_replace([' ', '-'], '_', $file->getClientOriginalName());
        $url_path = 'images/categorias/';
        $size = 280;

        if ($type == 'productos') {
        	$url_path = 'images/product-imgs/';
            $size = 520;
        }

        Image::make($file->path())->resize($size, null, function($contraint) {
            $contraint->aspectRatio();
            $contraint->upsize();
        })->save( $url_path . $imageName, 98);;

        // Eliminando la foto anterior
        if ($request->has('current_cat_image')) {
            File::delete($url_path . $request->input('current_cat_image'));
        }

        return $imageName;
    }
}
