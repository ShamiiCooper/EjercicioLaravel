@extends('layout.app')

@section('title','Editar Factura')

@section('content')
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar factura</h5>
    </div>
    <form action="/facturas/show/{{$factura->id}}" method="post">
        {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="formGroupExampleInput">Monto Total</label>
                <input type="number" class="form-control" name="monto_total" id="name-edit-client"
                       value="{{$factura->monto_total}}">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Cliente</label>
                <input type="text" class="form-control" name="cliente_id" value="{{$factura->cliente_id}}">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" id="save-fact" class="btn btn-primary">Modificar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
    </form>
@endsection