@extends('Plantilla')

@section('main')
@if (session()->has('Actualizar'))

{{!! "<script> Swal.fire(
'Correcto!',
'Tu registro de libro se guardo',
'success'
) </script>"!!}}

@endif
<h1 class="display-1 mt-4 mb-4 text-center"> Autores </h1>
    <div class="container col-md-6 mb-5"> 
        
    @foreach ($ConsultaLib as $consulta)
        <form action="{{route('consultaautor.store')}}">
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
                <td>{{$consulta->idautor}}</td>
                <td>{{$consulta->nombre_autor}}</td>
                <td>{{$consulta->fecha_nacimiento}}</td>
                <td>{{$consulta->libros_publicados}}</td>
                <td>{{$consulta->titulo}}</td>
                <td>{{$consulta->titulo}}</td>
                <td>{{$consulta->titulo}}</td>
                </tr>
            </tbody>
            </table>
            </form>
            <br>        
        </div>

     @endforeach
    </div>


@stop