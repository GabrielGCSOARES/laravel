<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Animal;

class Adocao extends Controller
{
    function adocao(){
        return view('adocao');
    }

    function criarAnimal(Request $request){

        $animal = new Animal();
        $animal->create($request->all());
    
        return view('login');

    }
}
