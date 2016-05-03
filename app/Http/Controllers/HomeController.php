<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Newsletter;
use App\Categoria;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = Newsletter::latest()->paginate(30);

        return view('admin.home', ['emails' => $emails]);
    }

    public function aresline()
    {
        $categorias = Categoria::getBySub(1);

        return view('admin.listado-categorias', ['categorias' => $categorias]);
    }
}
