<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Producto;
use App\Categoria;
use App\Marca;

class ProductoController extends Controller
{
    // Niveles necesarios para llegar al listado de productos,
    // $productNivel = 1, primera lista de la categoria

    public function index($marca, $cat_name)
    {
        $cat_name = $this->strSlugInverse($cat_name);

        $rs = Categoria::where('cat_nombre', strtoupper($cat_name))->first(['id', 'cat_parent']);
        if ($rs->cat_parent > 0) {
            $marca_id = Marca::getMarcaId($marca);
            $productos = Categoria::getBySub($marca_id, $rs->cat_parent);
        } else {
            $productos = Producto::getByCatID($rs->id);
        }
        $productNivel = 1;

        return view('listado-productos', compact('productos', 'marca', 'cat_name', 'productNivel'));
    }

    public function detalleProducto($marca, $cat_name, $id, $productoNombre)
    {
        $producto = Producto::find($id);
        $productoNombre = $producto->pro_nombre;
        $cat_name = $this->strSlugInverse($cat_name);

        $productosPorCategoria = Producto::getByCatID( Categoria::where('cat_nombre', strtoupper($cat_name))->pluck('id')->first() );
        return view('detalle-producto', compact('productosPorCategoria', 'producto', 'marca', 'cat_name', 'productoNombre', 'id'));
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
