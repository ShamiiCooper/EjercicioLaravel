@extends('layout.app')

@section('content')
    <div class="content">
        <div class="col-lg-12">
            <table class="table table-hover">

                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Monto Total</th>
                    <th scope="col">Fecha Emision</th>
                    <th scope="col">Proveedor</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$remito->id}}</td>
                    <td>{{$remito->monto_total}}</td>
                    <td>{{$remito->fecha_emision }}</td>
                    <td>{{$remito->proveedor_id}}</td>
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
                window.location.href = '{{url("/remitos")}}';
            });
        });
    </script>

@endsection
