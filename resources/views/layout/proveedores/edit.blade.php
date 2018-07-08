@extends('layout.app')

@section('title','Editar Proveedor')

@section('content')
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar proveedor</h5>
    </div>
    <form action="/proveedores/show/{{$proveedor->id}}" method="post">
        {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="formGroupExampleInput">Direccion</label>
                <input type="text" class="form-control" name="direccion" value="{{$proveedor->direccion}}">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Telefono</label>
                <input type="text" class="form-control" name="telefono" value="{{$proveedor->telefono}}">
            </div>

        </div>
        <div class="modal-footer">
            <button type="submit" id="save-proveedor" class="btn btn-primary">Modificar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
    </form>
@endsection