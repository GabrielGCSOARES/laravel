<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Usuario;

class Registro extends Controller
{
    function registro(){
        return view('registro');
    }
    function criarConta(Request $request){
        // dd($request->all());

        $usuario = new Usuario();
        $usuario->create($request->all());
    
        return view('login');

    }
}
