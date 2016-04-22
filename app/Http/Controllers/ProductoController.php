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
        $categorias = [];
        $productos = [];

        $rs = Categoria::where('cat_nombre', strtoupper($cat_name))->first(['id', 'cat_parent']);
        if ($rs->cat_parent > 0) {
            $marca_id = Marca::getMarcaId($marca);
            $categorias = Categoria::getBySub($marca_id, $rs->cat_parent);
            // dd($categorias->toArray());
        } else {
            $productos = Producto::getByCatID($rs->id);
        }
        $productNivel = 1;

        return view('listado-productos', compact('productos', 'categorias', 'marca', 'cat_name', 'productNivel'));
    }

    public function indexSub($marca, $cat_name, $sub_cat_name)
    {
        $sub_cat_name = $this->strSlugInverse($sub_cat_name);
        // Get the cat_sub
        $cat_sub = Categoria::where('cat_nombre', strtoupper($this->strSlugInverse($cat_name)))->pluck('cat_parent')->first();

        $cat_id = Categoria::where('cat_nombre', strtoupper($sub_cat_name))->where('cat_sub', $cat_sub)->pluck('id')->first();
        $productos = Producto::getByCatID($cat_id);
        $productNivel = 2;

        return view('productos-por-categoria', compact('productos', 'marca', 'cat_name', 'sub_cat_name', 'productNivel'));
    }

    public function detalleProducto($marca, $cat_name, $id, $productoNombre)
    {
        list($productosPorCategoria, $producto, $cat_name, $productoNombre) = $this->prepareDetailProduct($id, $cat_name);

        return view('detalle-producto', compact('productosPorCategoria', 'producto', 'marca', 'cat_name', 'productoNombre', 'id'));
    }

    public function detalleProductoSub($marca, $cat_name, $sub_cat_name, $id, $productoNombre)
    {
        $cat_name = $this->strSlugInverse($cat_name);
        $productNivel = null;
        list($productosPorCategoria, $producto, $sub_cat_name, $productoNombre) = $this->prepareDetailProduct($id, $cat_name, $sub_cat_name);

        return view('detalle-producto', compact('productosPorCategoria', 'producto', 'marca', 'cat_name', 'sub_cat_name', 'productoNombre', 'id', 'productNivel'));
    }

    private function prepareDetailProduct($id, $cat_name, $sub_cat_name = '')
    {
        $cat_id = 0;
        if ($sub_cat_name != '') {
            $cat_sub = Categoria::where('cat_nombre', strtoupper($this->strSlugInverse($cat_name)))->pluck('cat_parent')->first();
            $cat_id = Categoria::where('cat_nombre', strtoupper($sub_cat_name))->where('cat_sub', $cat_sub)->pluck('id')->first();
        } else {
            $cat_id = Categoria::where('cat_nombre', strtoupper($cat_name))->pluck('id')->first();
        }

        $producto = Producto::find($id);
        $productoNombre = $producto->pro_nombre;
        $cat_name = $this->strSlugInverse($cat_name);
        $productosPorCategoria = Producto::getByCatID( $cat_id );

        return [$productosPorCategoria, $producto, $cat_name, $productoNombre];
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
