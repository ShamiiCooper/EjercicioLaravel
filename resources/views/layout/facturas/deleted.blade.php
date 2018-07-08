@extends('layout.app')

@section('title','Eliminar')

@section('content')
    <div class='row'>
        <div class="alert alert-success">
            <strong>Borrado.</strong>
            Si lo desea puede volver pulsando el siguiente botón.
        </div>
    </div>

    <div class="row">
        <a class="btn btn-info" href='/facturas'>Volver</a>
    </div>
@endsection