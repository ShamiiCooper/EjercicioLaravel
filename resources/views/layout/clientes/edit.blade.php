@extends('layout.app')

@section('content')
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar cliente</h5>
    </div>
    <form action="/clientes/show/{{$cliente->id}}" method="post">
        {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="formGroupExampleInput">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="name-edit-client"
                       value="{{$cliente->nombre}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Direccion</label>
                <input type="text" class="form-control" name="direccion" id="address-edit-client"
                       value="{{$cliente->direccion}}">
            </div>

        </div>
        <div class="modal-footer">
            <button type="submit" id="save-client" class="btn btn-primary">Modificar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
    </form>
@endsection