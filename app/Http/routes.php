<?php

Route::get('/', function () {
    return view('layout/app');
});

// CLIENTES //

Route::get('/clientes', 'ClientesController@index');

Route::get('/clientes/delete/{id}', 'ClientesController@destroy');

Route::get('/clientes/edit/{id}', [
    'as' => 'clientes.edit',
    'uses' => 'ClientesController@edit'
]);

Route::post('/clientes/show/{id}', 'ClientesController@update');

Route::post('/clientes', 'ClientesController@store');


// FACTURAS //

Route::get('/facturas', 'FacturasController@index');

Route::get('/facturas/delete/{id}', 'FacturasController@destroy');

Route::get('/facturas/edit/{id}', [
    'as' => 'facturas.edit',
    'uses' => 'FacturasController@edit'
]);

Route::post('/facturas/show/{id}', 'FacturasController@update');

Route::post('/facturas/', 'FacturasController@store');


// PROVEEDORES //

Route::get('/proveedores', 'ProveedoresController@index');

Route::get('/proveedores/delete/{id}', 'ProveedoresController@destroy');

Route::get('/proveedores/edit/{id}', [
    'as' => 'proveedores.edit',
    'uses' => 'ProveedoresController@edit'
]);

Route::post('/proveedores/show/{id}', 'ProveedoresController@update');

Route::post('/proveedores/', 'ProveedoresControllerController@store');


// REMITOS //

Route::get('/remitos', 'RemitosController@index');

Route::get('/remitos/delete/{id}', 'RemitosController@destroy');

Route::get('/remitos/edit/{id}', [
    'as' => 'remitos.edit',
    'uses' => 'RemitosController@edit'
]);

Route::post('/remitos/show/{id}', 'RemitosController@update');

Route::post('/remitos/', 'RemitosController@store');