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
            // dd($categorias);
            // View, es el nivel de subcategoria que tiene una categoria ejem: view = 2 o 3 ...
            $view = 1;
            // dd($categorias->toArray());
            return view('categorias-sub_categorias', compact('categorias', 'marca', 'view'));
        }

        return abort(404);
    }

    public function subIndex($name, $catSub)
    {
        $categorias = Categoria::getBySub($catSub);
        return view('productos-por-categoria', ['categorias' => $categorias, 'categoriaNombre' => $name, 'parent_cat_id' => $catSub]);
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
