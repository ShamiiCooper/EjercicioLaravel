@extends('layout.app')

@section('title','Facturas')

@section('content')
    <div class="content">
        <div class="col-lg-12">
            <table class="table table-hover">

                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Monto Total</th>
                    <th scope="col">Fecha Emision</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($facturas as $factura)
                    <tr>
                        <td>{{$factura->id}}</td>
                        <td>{{$factura->monto_total}}</td>
                        <td>{{$factura->fecha_emision}}</td>
                        <td>{{$factura->cliente_id }}</td>
                        <td>
                            <a href="/facturas/edit/{{$factura->id}}" class="btn btn-success">Editar
                            </a>
                            <a href="/facturas/delete/{{$factura->id}}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-lg-12">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-new-fact">
            Nuevo
        </button>

        <div class="modal fade" id="modal-new-fact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nueva factura</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" action="{{url('/facturas')}}" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Monto Total</label>
                                <input type="number" class="form-control" name="monto_total">
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput2">Cliente</label>
                                <input type="text" class="form-control" name="cliente_id">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="save-new-fact" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#fact-edit').click(function () {
                window.location.href = $(this).data('href');
            });

        });
    </script>
@endsection
