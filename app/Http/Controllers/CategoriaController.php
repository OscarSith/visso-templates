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
        $isFile = false;
        $imageName = '';
        if ($request->hasFile('cat_imagen')) {
            $isFile = true;
            try {
                $imageName = $this->uploadPhoto($request, 'cat_imagen');
            } catch (Exception $ex) {
                return redirect()->back()->with('error_message', 'Ups... no se puede procesar el archivo subido, intentelo de nuevo, si persiste contacte con el programador');
            }
        }

        $categoria = Categoria::find($request->input('cat_id'));
        $categoria->cat_nombre = $request->input('cat_nombre');
        if ($isFile) {
            $categoria->cat_imagen = $imageName;
        }
        $categoria->save();

        return redirect()->back()->with('success_message', 'Categoria ' . $request->input('cat_nombre') . '  actualizada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $marca
     * @param  int  $parent_id
     * @return \Illuminate\Http\Response
     */
    public function show($marca, $parent_id)
    {
        $categorias = Categoria::getBySub($marca, $parent_id);
        return view('admin.listado-categorias', compact('categorias', 'marca'));
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
