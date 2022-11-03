<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validador;

class controladorvista extends Controller
{
    public function GuardarLibro(validador $req){

        return redirect('Registro')->with('enviado','Llego correcto');

    }

    public function showInicio(){
        return view('Inicio');
    }

    public function showRegistro(){
        return view('Registro');
    }
}
