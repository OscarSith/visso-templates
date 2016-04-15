<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Newsletter;

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
