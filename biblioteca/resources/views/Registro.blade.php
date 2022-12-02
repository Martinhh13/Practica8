@extends('Plantilla')

@section('main')

@if (session()->has('enviado'))
<?php $titulo= session()->get('title')?>
    {{!! "<script> Swal.fire(
    'Correcto!',
    'Se guardo el libro {$titulo}',
    'success'
    ) </script>"!!}}

    @endif


<div class="card text-dark container mt-5 col-md-6 bg-info">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $error }}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>    
                @endforeach

            @endif
            <div class="card-header text-center">
                Registre el libro
            </div>
            <div class="card-body">
            <form class="m-5" method="post" action="{{route('consultalibro.store')}}">
            @csrf
                <div class="m-5 ">
                    <label>ISBN: </label>
                    <input type="number" class="form-control" name="txtisbn" value="{{old('txtisbn')}}">
                    <p class="text-primary"> {{ $errors->first('txtisbn')}} </p>
                </div>
                <div class="m-5 ">
                    <label>Titulo: </label>
                    <input type="text" class="form-control" name="txtTitulo" value="{{old('txtTitulo')}}">
                    <p class="text-primary"> {{ $errors->first('txtTitulo')}} </p>
                </div>
                <div class="m-5 ">
                    <label>Autor: </label>
                    <input type="text" class="form-control" name="txtAuto" value="{{old('txtAuto')}}">
                    <p class="text-primary"> {{ $errors->first('txtAuto')}} </p>
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
                <div class="m-5 ">
                    <label>Paginas: </label>
                    <input type="number" class="form-control" name="txtpaginas" value="{{old('txtpaginas')}}">
                    <p class="text-primary"> {{ $errors->first('txtpaginas')}} </p>
                </div>
                <div class="m-5 ">
                    <label>Editorial: </label>
                    <input type="text" class="form-control" name="txtEditorial" value="{{old('txtEditorial')}}">
                    <p class="text-primary"> {{ $errors->first('txtEditorial')}} </p>
                </div>
                <div class="m-5 ">
                    <label>Email Editorial: </label>
                    <input type="email" class="form-control" name="txtemail" value="{{old('txtemail')}}">
                    <p class="text-primary"> {{ $errors->first('txtemail')}} </p>
                </div>

                <button type="submit" class="btn btn-success "> Registrar Libro </button>
            </form>
            </div>
</div>

@stop