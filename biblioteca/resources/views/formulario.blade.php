@extends('Plantilla')

@section('main')

@if (session()->has('enviado'))
<?php $titulo= session()->get('title')?>
    {{!! "<script> Swal.fire(
    'Correcto!',
    'Se guardo el Autor {$titulo}',
    'success'
    ) </script>"!!}}

    @endif


<div class="card text-white container mt-5 col-md-6 bg-secondary">
           
            <div class="card-header text-center">
                Registre el libro
            </div>
            <div class="card-body">
            <form class="m-5" method="post" action="{{route('consultaautor.store')}}">
                @csrf
                <div>
                <Label>Nombre completo del autor: </label>
                    <input type="text" name="txtauto" value="{{old('txtauto')}}">
                    <p class="text-primary"> {{ $errors->first('txtauto')}} </p>
                </div>
                <div>
                    <Label>Fecha de nacimiento del autor: </label>
                        <input type="date" name="txtfecha" value="{{old('txtfecha')}}">
                        <p class="text-primary"> {{ $errors->first('txtfecha')}} </p>
                </div>
                <div>
                    <Label>Numero de libro publicados del autor: </label>
                        <input type="number" name="txtnum" value="{{old('txtnum')}}">
                        <p class="text-primary"> {{ $errors->first('txtnum')}} </p>
                </div>

                <button type="submit" class="btn btn-success "> Registrar Autor </button>
            </form>
            </div>
</div>

@stop