<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Personagens;

class Personagem extends Controller
{
    function view(){
        return view('cadastrar-personagem');
    }

    function salvarPersonagem( Request $dados){
        $personagem = new Personagens();
        $personagem->create($dados->all());
    }

    function listarPersonagem(){
        return view('listar-personagem');
    }
}
