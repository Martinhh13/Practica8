<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validador;
use DB;
use Carbon\Carbon;

class controladorLibros extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConsultaLib= DB::table('tb_libros')->get();
        return view('consultalibro',compact('ConsultaLib'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=DB::table('tb_autores')->get();
        return view('Registro',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validador $request)
    {
        DB::table('tb_libros')->insert([
            "ISBN"=> $request->input('txtisbn'),
            "Titulo"=> $request->input('txtTitulo'),
            "Autor"=> $request->input('txtAuto'),
            "autor_id"=> $request->input('txtAutor'),
            "Paginas"=> $request->input('txtpaginas'),
            "Editorial"=> $request->input('txtEditorial'),
            "Emailed"=> $request->input('txtemail'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('consultalibro/create')->with('confirmacion','abc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId= DB::table('tb_libros')->where('Id',$id)->first();
        return view('eliminarlibro', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId= DB::table('tb_libros')->where('Id',$id)->first();
        $categorias = tb_autores::all();
        return view('editarlibro', compact('consultaId'),compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validador $request, $id)
    {
        DB::table('tb_libros')->where('Id',$id)->update([
            "ISBN"=> $request->input('txtisbn'),
            "Titulo"=> $request->input('txtTitulo'),
            "autor_id"=> $request->input('txtAutor'),
            "Paginas"=> $request->input('txtpaginas'),
            "Editorial"=> $request->input('txtEditorial'),
            "Emailed"=> $request->input('txtemail'),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('consultalibro')->with('actualizar','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_libros')->where('Id',$id)->delete();

        return redirect('libro')->with('elimina','abc');
    }
}
