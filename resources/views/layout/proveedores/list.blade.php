@extends('layout.app')

@section('title','Proveedores')

@section('content')
    <div class="content">
        <div class="col-lg-12">
            <table class="table table-hover">

                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Fecha Alta</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($proveedores as $proveedor)
                    <tr>
                        <td>{{$proveedor->id}}</td>
                        <td>{{$proveedor->telefono}}</td>
                        <td>{{$proveedor->direccion}}</td>
                        <td>{{$proveedor->fecha_alta }}</td>
                        <td>
                            <a href="/proveedores/edit/{{$proveedor->id}}" class="btn btn-success">Editar
                            </a>
                            <a href="/proveedores/delete/{{$proveedor->id}}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-lg-12">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-new-proveedor">
            Nuevo
        </button>

        <div class="modal fade" id="modal-new-proveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo proveedor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" action="{{url('/proveedores')}}" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Direccion</label>
                                <input type="text" class="form-control" name="direccion">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Telefono</label>
                                <input type="text" class="form-control" name="telefono">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="save-new-proveedor" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection
