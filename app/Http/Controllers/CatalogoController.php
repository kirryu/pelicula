<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PeliculaModel;

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

    public function create(Request $request)
    {
        return view('catalog.añadir_pelicula');
    }
    public function store(Request $request)
    {
        $obj = new PeliculaModel(); 
        $obj->titulo = $request->txt_titulo; 
        $obj->genero = $request->txt_genero; 
        $obj->resumen = $request->txt_resumen;
        if ($request->txt_precio < 5.00)
        {
            return back()->withErrors(['store_error'=>"El precio es menor a $5.0"])
                        ->withInput();
        }else 
        {
            $obj->precio = $request->txt_precio; 
        }
        
        $obj->save();
        return back()->withErrors(['store_error'=>"Pelicula añadida"]);
    }

    public function edit($id)
    {
        return view('catalog.modificar_pelicula',array('id'=> $id));
    }
}
