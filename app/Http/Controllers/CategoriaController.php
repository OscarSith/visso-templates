<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Categoria;
use App\Marca;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($marca = 'visso')
    {
        $marca_id = Marca::where('nombre', strtoupper($marca))->pluck('id')->first();
        if ($marca_id > 0) {
            $categorias = Categoria::getBySub($marca_id);
            // View, es el nivel de subcategoria que tiene una categoria ejem: view = 2 o 3 ...
            $view = 1;
            $cat_name = '';
            return view('categorias-sub_categorias', compact('categorias', 'marca', 'view', 'marca_id', 'cat_name'));
        }

        return abort(404);
    }

    public function index2($marca, $cat_name)
    {
        $cat_name = $this->strSlugInverse($cat_name);

        $cat_parent = Categoria::where('cat_nombre', strtoupper($cat_name))->pluck('cat_parent')->first();
        $marca_id = Marca::getMarcaId($marca);
        $categorias = Categoria::getBySub($marca_id, $cat_parent);
        $productNivel = 1;

        return view('listado-productos', compact('categorias', 'marca', 'marca_id', 'cat_name', 'productNivel'));
    }

    public function index3($marca, $cat_name, $cat_parent, $sub_cat_name)
    {
        $cat_name = $this->strSlugInverse($cat_name);
        $sub_cat_name = $this->strSlugInverse($sub_cat_name);
        $marca_id = Marca::getMarcaId($marca);
        $categorias = Categoria::getBySub($marca_id, $cat_parent);
        $productNivel = 2;

        return view('listado-productos', compact('categorias', 'marca', 'cat_name', 'sub_cat_name', 'marca_id', 'productNivel', 'cat_parent'));
    }

    public function subIndex($name, $catSub)
    {
        $categorias = Categoria::getBySub($catSub);
        return view('productos-por-categoria', ['categorias' => $categorias, 'categoriaNombre' => $name, 'parent_cat_id' => $catSub]);
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
