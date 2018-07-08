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
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <th scope="row">{{$cliente->id}}</th>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>{{$cliente->fecha_alta }}</td>
                        <td>
                            <button class="btn btn-success" id="client-edit"
                                    data-href="{{route('clientes.edit',['id' => $cliente->id])}}">Editar
                            </button>
                            <button class="btn btn-danger" id="client-delete">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-lg-12">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-new-client">
            Nuevo
        </button>

        <div class="modal fade" id="modal-new-client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo cliente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" action="{{url('/clientes')}}" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="name-new-client">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Direccion</label>
                                <input type="text" class="form-control" name="direccion" id="address-new-client">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Fecha Alta</label>
                                <input type="date" class="form-control" name="fecha_alta" id="date-new-client">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="save-new-client" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#client-edit').click(function () {
                window.location.href = $(this).data('href');
            });

        });
    </script>
@endsection
