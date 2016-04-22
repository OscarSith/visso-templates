<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Newsletter;
use App\Proyecto;

class WelcomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function nosotros()
    {
        return view('nosotros');
    }

<<<<<<< HEAD
=======
    public function proyectos()
    {
        $proyectos = Proyecto::latest()->get(['id', 'proy_nombre','proy_thumb_imagen', 'proy_logotipo']);
        return view('proyectos', compact('proyectos'));
    }

    public function proyectDetail($id, $proyecto_nombre)
    {
        $proyecto = Proyecto::find($id);
        $galery = json_decode($proyecto->proy_galeria, true);
        return view('detalle-proyecto', compact('proyecto', 'galery'));
    }

>>>>>>> 36e6034f2a312c9cb4a2a796ebfe64882d72d28f
    public function contacto()
    {
    	return view('contacto');
    }

    public function newsletter(Request $request)
    {
        Newsletter::create($request->all());
        return redirect()->back()->with('success_message', 'Su correo se guardo satisfactoriamente');
    }
}
