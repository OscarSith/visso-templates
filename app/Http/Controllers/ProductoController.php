<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Producto;
use App\Categoria;
use App\Marca;
use App\Galeria;

class ProductoController extends Controller
{
    // Niveles necesarios para llegar al listado de productos,
    // $productNivel = 1, primera lista de la categoria

    public function detalleProductoSimple($marca, $id, $productoNombre)
    {
        $cat_name = '';
        list($productosPorCategoria, $producto) = $this->prepareDetailProduct($id);
        return view('detalle-producto', compact('productosPorCategoria', 'producto', 'marca', 'cat_name', 'productoNombre', 'id'));
    }

    public function detalleProducto($marca, $cat_name, $id, $productoNombre)
    {
        list($productosPorCategoria, $producto, $cat_name) = $this->prepareDetailProduct($id, $cat_name);
        return view('detalle-producto', compact('productosPorCategoria', 'producto', 'marca', 'cat_name', 'productoNombre', 'id'));
    }

    public function detalleProductoSub($marca, $cat_name, $cat_parent, $sub_cat_name, $id, $productoNombre)
    {
        $productNivel = null;
        list($productosPorCategoria, $producto, $cat_name, $sub_cat_name) = $this->prepareDetailProduct($id, $cat_name, $sub_cat_name);
        return view('detalle-producto', compact('productosPorCategoria', 'producto', 'marca', 'cat_name', 'sub_cat_name', 'productoNombre', 'id', 'productNivel', 'cat_parent'));
    }

    private function prepareDetailProduct($id, $cat_name = '', $sub_cat_name = '')
    {
        $producto = Producto::find($id);
        $productosPorCategoria = Galeria::where( 'producto_id', $id )->where('gal_estado', 1)->get(['id', 'pro_imagen_default', 'name', 'description']);

        if ($cat_name != '') {
            $cat_name = $this->strSlugInverse($cat_name);
        }

        if ($sub_cat_name != '') {
            $sub_cat_name = $this->strSlugInverse($sub_cat_name);
        }

        return [$productosPorCategoria, $producto, $cat_name, $sub_cat_name];
    }

    /**
     * En caso de que el nombre de la categoria esté con linea en medio,
     * agregado por la funcion str_slug()
     * @param  string $cat_name
     * @return string
     */
    private function strSlugInverse($cat_name)
    {
        $arr = explode('-', $cat_name);
        if (count($arr) > 1) {
            $cat_name = implode(' ', $arr);
        }

        return $cat_name;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
