<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Producto;
use App\Categoria;
use App\Marca;
use App\Galeria;
use File;

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
        $params = [];
        if ($request->hasFile('pro_imagen_default')) {
            $params = $request->all();
            try {
                $params['pro_imagen_default'] = $this->uploadPhoto($request, 'pro_imagen_default', 'productos');

            } catch (Exception $ex) {
                return redirect()->back()->with('error_message', 'Ups... no se puede procesar el archivo subido, intentelo de nuevo, si persiste contacte con el programador');
            }
        } else {
            $params = $request->except('pro_imagen_default');
        }

        Galeria::create($params);

        return redirect()->back()->with('success_message', 'Imagen agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        $galerias = Galeria::getByProductId($id);

        return view('admin.admin-detalle-producto', compact('producto', 'galerias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $params = [];
        if ($request->hasFile('pro_imagen_default')) {
            $params = $request->all();

            try {
                $params['pro_imagen_default'] = $this->uploadPhoto($request, 'pro_imagen_default', 'productos');

            } catch (Exception $ex) {
                return redirect()->back()->with('error_message', 'Ups... no se puede procesar el archivo subido, intentelo de nuevo, si persiste contacte con el programador');
            }

        } else {
            $params = $request->except('pro_imagen_default');
        }

        if ($params['position'] == 1) {
            $producto = Producto::find($params['producto_id']);
            if ($request->hasFile('pro_imagen_default')) {
                $producto->pro_imagen_default = $params['pro_imagen_default'];
            }
            $producto->pro_descripcion = $params['description'];
            $producto->pro_nombre = $params['name'];
            $producto->save();
        }

        $galeria = Galeria::find($id);
        $galeria->fill($params);
        $galeria->save();

        return redirect()->back()->with('success_message', 'Datos del producto actualizados');
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
        $params = [];
        if ($request->hasFile('pro_imagen_default')) {
            $params = $request->all();

            try {
                $params['pro_imagen_default'] = $this->uploadPhoto($request, 'pro_imagen_default', 'productos');

                $galeria_id = Galeria::where('producto_id', $id)->pluck('id')->first();
                $galeria = Galeria::find($galeria_id);
                $galeria->pro_imagen_default = $params['pro_imagen_default'];
                $galeria->save();

            } catch (Exception $ex) {
                return redirect()->back()->with('error_message', 'Ups... no se puede procesar el archivo subido, intentelo de nuevo, si persiste contacte con el programador');
            }

        } else {
            $params = $request->except('pro_imagen_default');
        }

        $producto = Producto::find($id);
        $producto->fill($params);
        $producto->save();

        return redirect()->back()->with('success_message', 'Datos del producto actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeria = Galeria::find($id);
        File::delete('images/product-imgs/' . $galeria->pro_imagen_default);
        $galeria->delete();

        return redirect()->back()->with('success_message', 'Imagen Eliminada');
    }
}
