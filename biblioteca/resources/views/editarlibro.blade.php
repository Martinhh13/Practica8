@extends('Plantilla')

@section('main')

<div class="container mt-5 col-md-6">

    <h1 class="display-2 text-center mb-5"> Actualizar Libro</h1>

         <div class="card mb-5">

            <div class="card-header fw-bold">
                Editar
            </div>

            <div class="card-body">

                <form class="m-4" method="POST" action="{{route('consultalibro.update',$consultaId->Id)}}">
                    
                    @csrf

                    {!! method_field('PUT') !!}

                    <!--Errores individuales y guardar los datos escritos-->
                    <div class="mb-3">
                        <label class="form-label">Titulo </label>
                        <input type="text" placeholder="Titulo del libro" class="form-control" required name="txtTitulo" value="{{$consultaId->Titulo}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtTitulo') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ISBN </label>
                        <input type="char" placeholder="digite el ISBN" class="form-control" required name="txtisbn" value="{{$consultaId->ISBN}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtisbn') }} </p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Paginas </label>
                        <input type="numeric" placeholder="Digite el número total de paginas del libro" class="form-control" required name="txtpaginas" value="{{$consultaId->Paginas}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtpaginas') }} </p>
                    </div>

                    <div class="mb-3">
                        <label for="text" class="form-label">Autor </label>
                        <select class="form-select" name="txtAutor" aria-label="Default select example">
                            <option selected> Selecciona un autor...</option>

                            @foreach ($categorias as $consulta)
                            <option value="{{$consulta->idautor}}">{{$consulta->nombre_autor}}</option>
                            @endforeach
                        
                        </select>
                        <!--<input type="text" placeholder="Autor del libro" class="form-control" required name="txtAutor" value="{{old('txtAutor')}}">-->
                    <p class="text-primary fst-italic" style="color: aqua"> 
                        {{ $errors->first('txtAutor') }} </p>
                    </div>
          
                    <div class="mb-3">
                        <label class="form-label">Editorial </label>
                        <input type="text" placeholder="Editorial que publica el libro" class="form-control" name="txtEditorial" value="{{$consultaId->Editorial}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtEditorial') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email de la editorial </label>
                        <input type="email" placeholder="ejemplo@gmail.com" class="form-control" name="txtemail" value="{{$consultaId->Emailed}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtemail') }} </p>
                    </div>
                    
            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-primary m-1">Actualizar Libro</button>
            
            </form>

            </div>
        </div>
    </div>
    


@stop