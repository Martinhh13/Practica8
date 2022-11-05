@extends('Plantilla')

@section('main')

@if (session()->has('enviado'))

    {{!! "<script> Swal.fire(
    'Correcto!',
    'Se guardo el libro',
    'success'
    ) </script>"!!}}

    @endif


<div class="card text-dark container mt-5 col-md-6 bg-warning">
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
            <form class="m-5" method="post" action="GuardarLibro">
            @csrf
                <div class="m-5 text-center">
                    <label>ISBN</label>
                    <input type="number" class="form-control" name="txtisbn" value="{{old('txtisbn')}}">
                    <p class="text-primary"> {{ $errors->first('txtisbn')}} </p>
                </div>
                <div class="m-5 text-center">
                    <label>Titulo</label>
                    <input type="text" class="form-control" name="txtTitulo" value="{{old('txtTitulo')}}">
                    <p class="text-primary"> {{ $errors->first('txtTitulo')}} </p>
                </div>
                <div class="m-5 text-center">
                    <label>Autor</label>
                    <input type="text" class="form-control" name="txtautor" value="{{old('txtautor')}}">
                    <p class="text-primary"> {{ $errors->first('txtautor')}} </p>
                </div>
                <div class="m-5 text-center">
                    <label>Paginas</label>
                    <input type="text" class="form-control" name="txtpaginas" value="{{old('txtpaginas')}}">
                    <p class="text-primary"> {{ $errors->first('txtpaginas')}} </p>
                </div>
                <div class="m-5 text-center">
                    <label>Editorial</label>
                    <input type="text" class="form-control" name="txtEditorial" value="{{old('txtEditorial')}}">
                    <p class="text-primary"> {{ $errors->first('txtEditorial')}} </p>
                </div>
                <div class="m-5 text-center">
                    <label>Email Editorial</label>
                    <input type="email" class="form-control" name="txtemail" value="{{old('txtemail')}}">
                    <p class="text-primary"> {{ $errors->first('txtemail')}} </p>
                </div>

                <button type="submit" class="btn btn-success "> Registrar Libro </button>
            </form>
            </div>
</div>

@stop