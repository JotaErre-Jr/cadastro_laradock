<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function cadastrar(){
        return view('usuario.cadastro');

    }

    public function salvar(Request $request){
        dd($request->all());

    }
}


