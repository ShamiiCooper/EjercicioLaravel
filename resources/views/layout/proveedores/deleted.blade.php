@extends('layout.app')

@section('title','Borrado')

@section('content')
    <div class="container-fluid">
        <div class='row'>
            <div class="alert alert-success">
                <strong>Borrado.</strong>
                Si lo desea puede volver pulsando el siguiente botón.
            </div>
        </div>

        <div class="row">
            <a class="btn btn-info" href='/proveedores'>Volver</a>
        </div>
    </div>
@endsection