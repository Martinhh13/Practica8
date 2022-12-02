@extends('Plantilla')

@section('main')

<h1 class="display-1 mt mt-4 mb-4 text-center"> Eliminar </h1>

<form class="m-4" method="POST" action="{{route('consultalibro.update',$consultaId->Id)}}">          
    <div class="container col-md-6 mt-5 mb-5">
        <div class="card text-center">
            <div class="card-header">
              <h5 class="text-primary text center">{{$consultaId->Titulo}}</h5>
            </div>

            <div class="card-body">
              <p class="card-text">{{$consultaId->ISBN}}</p>
              <p class="card-text">{{$consultaId->Paginas}}</p>
              <p class="card-text">{{$consultaId->autor_id}}</p>
              <p class="card-text">{{$consultaId->Editorial}}</p>
              <p class="card-text">{{$consultaId->Emailed}}</p>
            </div>
</form>
            <div class="card-footer text-muted">
              <form method="POST" action="{{route('consultalibro.destroy',$consultaId->Id)}}">
              @csrf
              @method('delete')
                <button type="submit"> Si, Eliminalo </button>
                <a href="{{ route('consultalibro.index') }}" class="btn btn-primary">No, Regresame</a>
              </form>
            </div>
        </div>
    </div>



@stop