<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorv;
use DB;
use Carbon\Carbon;

class controladorAutores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConsultaAut=DB::table('tb_autores')->get();
        return view('consultaautor',compact('ConsultaAut'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consultaautor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorv $request)
    {
        DB::table('tb_autores')->insert([
            "nombre_autor"=> $request->input('txtauto'),
            "fecha_nacimiento"=> $request->input('txtfecha'),
            "libros_publicados"=> $request->input('txtnum'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()

        ]);
        return redirect('consultaautor')->with('enviado','abc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId= DB::table('tb_autores')->where('idautor',$id)->first();

        return view('eliminarautor', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId= DB::table('tb_autores')->where('idautor',$id)->first();

        return view('editarautor', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorv $request, $id)
    {
        DB::table('tb_autores')->where('idautor',$id)->update([
            "nombre_autor"=> $request->input('txtauto'),
            "fecha_nacimiento"=> $request->input('txtfecha'),
            "libros_publicados"=> $request->input('txtnum'),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('consultaautor')->with('actualizar','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_autores')->where('idautor',$id)->delete();

        return redirect('consultaautor')->with('elimina','abc');
    }
}
