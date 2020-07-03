<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {

    }

    public function login()
    {
      
        return view('login'); 
    }

    public function acceso(Request $request)
    {
        $usuario = $request->txt_usuario; 
        $password = $request->txt_password;
        if ($usuario <> "admin" ){
            return back()->withErrors(['user_error'=>"Usuario incorrecto"]);
        }else if($password <> "123"){
            return back()->withErrors(['password_error'=>"Contraseña Incorrecto"]);
        }else
        return redirect()->route('login'); 
    }
    public function logout()
    {
        return view('logout');
    }
}
