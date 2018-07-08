@extends('layout.app')

@section('title','Remitos')

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
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($remitos as $remito)
                    <tr>
                        <td>{{$remito->id}}</td>
                        <td>{{$remito->monto_total}}</td>
                        <td>{{$remito->fecha_emision }}</td>
                        <td>{{$remito->proveedor_id}}</td>
                        <td>
                            <a href="/remitos/edit/{{$remito->id}}" class="btn btn-success" id="remito-edit">Editar
                            </a>
                            <a href="/remitos/delete/{{$remito->id}}" class="btn btn-danger"
                               id="remito-delete">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-lg-12">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-new-remito">
            Nuevo
        </button>

        <div class="modal fade" id="modal-new-remito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo remito</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" action="{{url('/remitos')}}" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Monto Total</label>
                                <input type="number" class="form-control" name="monto_total">
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput2">Proveedor</label>
                                <input type="text" class="form-control" name="proveedor_id">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="save-new-remito" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#remito-edit').click(function () {
                window.location.href = $(this).data('href');
            });

        });
    </script>
@endsection
