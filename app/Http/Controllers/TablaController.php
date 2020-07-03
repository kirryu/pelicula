<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablaController extends Controller
{
    public function index(){

    }

    public function tabla(){
        return view('listanumero');
    }

    public function multiplicacion($id){
        return view('listamultiplicacion',array('id'=> $id));
    }

    public function operacion($id, $estado)
    {
        return view('listaresultado',array('id' => $id, 'estado' => $estado));
    }

    public function show($id)
    {
        return view('listaoperacion',array('id'=>$id));
    }
}

