@extends('layout.app')

@section('content')
    <div class="content">
        <div class="col-lg-12">
            <table class="table table-hover">

                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Fecha Alta</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->direccion}}</td>
                    <td>{{$cliente->fecha_alta }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-lg-12">
        <button type="button" id="back" class="btn btn-primary">Volver</button>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#back').click(function () {
                window.location.href = '{{url("/clientes")}}';
            });
        });
    </script>

@endsection
