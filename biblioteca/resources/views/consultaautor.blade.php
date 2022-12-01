@extends('Plantilla')

@section('main')
@if (session()->has('Actualizar'))

{{!! "<script> Swal.fire(
'Correcto!',
'Tu registro de libro se guardo',
'success'
) </script>"!!}}
@endif

@if (session()->has('elimina'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Autor fusilado',
            'success'
          ) </script>"!!}        
@endif

<h1 class="display-1 mt-4 mb-4 text-center"> Autores </h1>
    <div class="container col-md-6 mb-5"> 
        
  @foreach ($ConsultaAut as $consulta)
    <div class="container col-md-6 mt-5 mb-5">
        <div class="card text-center">
            <div class="card-header">
            </div>

            <div class="card-body">
              <p class="card-text">{{$consulta->nombre_autor}}</p>
              <p class="card-text">{{$consulta->fecha_nacimiento}}</p>
              <p class="card-text">{{$consulta->libros_publicados}}</p>

            </div>

            <div class="card-footer text-muted">
                <a href="{{route('consultaautor.show',$consulta->idautor)}}" class="btn btn-danger">Eliminar</a>
                <a href="{{route('consultaautor.edit',$consulta->idautor)}}" class="btn btn-primary">Actualizar</a>
            </div>
          </div>

          @endforeach

    </div>
  </div>

@stop