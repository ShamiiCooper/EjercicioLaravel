@extends('layout.app')
@section('title', 'Editar Remito')
@section('content')
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar remito</h5>
    </div>
    <form action="/remitos/show/{{$remito->id}}" method="post">
        {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="formGroupExampleInput">Monto total</label>
                <input type="text" class="form-control" name="monto_total" id="name-edit-remito"
                       value="{{$remito->monto_total}}">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Proveedor</label>
                <input type="date" class="form-control" name="proveedor_id" id="date-edit-remito"
                       value="{{$remito->proveedor_id}}">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" id="save-remito" class="btn btn-primary">Modificar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
    </form>
@endsection