@extends('Plantilla')

@section('main')

<h1 class="display-1 mt-4 mb-4 text-center"> Libros </h1>
    <div class="container col-md-6 mb-5"> 
        
        @foreach ($ConsultaRec as $consulta)

        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
            </table>
            Variants
            Use contextual classes to color tables, table rows or individual cells.

            Class	Heading	Heading
            Default	Cell	Cell
            Primary	Cell	Cell
            Secondary	Cell	Cell
            Success	Cell	Cell
            Danger	Cell	Cell
            Warning	Cell	Cell
            Info	Cell	Cell
            Light	Cell	Cell
            Dark	Cell	CellCopy
            <!-- On tables -->
            <table class="table-primary">...</table>
            <table class="table-secondary">...</table>
            <table class="table-success">...</table>
            <table class="table-danger">...</table>
            <table class="table-warning">...</table>
            <table class="table-info">...</table>
            <table class="table-light">...</table>
            <table class="table-dark">...</table>

            <!-- On rows -->
            <tr class="table-primary">...</tr>
            <tr class="table-secondary">...</tr>
            <tr class="table-success">...</tr>
            <tr class="table-danger">...</tr>
            <tr class="table-warning">...</tr>
            <tr class="table-info">...</tr>
            <tr class="table-light">...</tr>
            <tr class="table-dark">...</tr>

            <!-- On cells (`td` or `th`) -->
            <tr>
            <td class="table-primary">...</td>
            <td class="table-secondary">...</td>
            <td class="table-success">...</td>
            <td class="table-danger">...</td>
            <td class="table-warning">...</td>
            <td class="table-info">...</td>
            <td class="table-light">...</td>
            <td class="table-dark">...</td>
            </tr>
            <br>        
        </div>

        @endforeach
    </div>

@stop