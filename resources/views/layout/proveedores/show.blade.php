@extends('layout.app')

@section('content')
    <div class="content">
        <div class="col-lg-12">
            <table class="table table-hover">

                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Fecha Alta</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$proveedor->id}}</td>
                    <td>{{$proveedor->direccion}}</td>
                    <td>{{$proveedor->telefono}}</td>
                    <td>{{$proveedor->fecha_alta }}</td>
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
                window.location.href = '{{url("/proveedores")}}';
            });
        });
    </script>

@endsection
