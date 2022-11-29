<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validador;
use App\Http\Requests\validadorv;


class controladorvista extends Controller
{
    public function GuardarLibro(validador $req){

        return redirect('Registro')
        ->with('enviado','Llego correcto')
        ->with('title',$req->txtTitulo);

    }
    public function Guardarautor(validadorv $req){

        return redirect('formulario')
        ->with('enviado','Llego correcto');

    }

    public function showInicio(){
        return view('Inicio');
    }

    public function showRegistro(){
        return view('Registro');
    }

    
    public function showform(){
        return view('formulario');
    }
}
