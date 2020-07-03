<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index()
    {
        return view('catalog.listado');
    }

    public function show($id)
    {
        return view('catalog.detalle_pelicula',array('id'=>$id));
    }

    public function create()
    {
        return view('catalog.añadir_pelicula');
    }

    public function edit($id)
    {
        return view('catalog.modificar_pelicula',array('id'=> $id));
    }
}
