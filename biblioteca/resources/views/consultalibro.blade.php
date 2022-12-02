@extends('Plantilla')

@section('main')

<h1 class="display-1 mt-4 mb-4 text-center"> Libro </h1>
    <div class="container col-md-6 mb-5"> 
        
    @foreach ($ConsultaLib as $consulta)
    <div class="container col-md-6 mt-5 mb-5">
        <div class="card text-center">
            <div class="card-header">
              <h5 class="text-primary text center">{{$consulta->Titulo}}</h5>
            </div>

            <div class="card-body">
              <p class="card-text">{{$consulta->ISBN}}</p>
              <p class="card-text">{{$consulta->autor_id}}</p>
              <p class="card-text">{{$consulta->Paginas}}</p>
              <p class="card-text">{{$consulta->Editorial}}</p>
              <p class="card-text">{{$consulta->Emailed}}</p>
            </div>

            <div class="card-footer text-muted">
                <a href="{{route('consultalibro.show',$consulta->idLibros)}}" class="btn btn-danger">Eliminar</a>
                <a href="{{route('consultalibro.edit',$consulta->idLibros)}}" class="btn btn-primary">Actualizar</a>
            </div>
          </div>
    </div>
    @endforeach
  </div>

@stop