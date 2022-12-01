@extends('Plantilla')

@section('main')

<h1 class="display-1 mt-4 mb-4 text-center"> Libro </h1>
    <div class="container col-md-6 mb-5"> 
        
    @foreach ($ConsultaLib as $consulta)
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">ISBN</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Paginas</th>
                <th scope="col">Editorial</th>
                <th scope="col">Email</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>{{$consulta->Id}}</td>
                <td>{{$consulta->ISBN}}</td>
                <td>{{$consulta->Titulo}}</td>
                <td>{{$consulta->Autor}}</td>
                <td>{{$consulta->Paginas}}</td>
                <td>{{$consulta->Editorial}}</td>
                <td>{{$consulta->Emailed}}</td>
                </tr>
            </tbody>
            </table>
            <br>        
        </div>

     @endforeach
    </div>

@stop