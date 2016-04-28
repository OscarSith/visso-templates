<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Newsletter;
use App\Proyecto;
use Mail;

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

    public function contacto()
    {
    	return view('contacto');
    }

    public function sendMailContact(Request $request)
    {
        $params = $request->all();
        if ($request->has('acepta')) {
            Newsletter::create($params);
        }

        Mail::send('layouts.contact_mail', $params, function($m) {
            $m->from('no-reply@visso.com.pe', 'Visso');

            $m->to('larriega@gmail.com', 'Oscar Larriega')->subject('Mensaje enviado desde la web de Visso');
        });

        return redirect()->back()->with('success_message', 'Mensaje enviado exitosamente');
    }

    public function newsletter(Request $request)
    {
        Newsletter::create($request->all());
        return redirect()->back()->with('success_message', 'Su correo se guardo satisfactoriamente');
    }
}
