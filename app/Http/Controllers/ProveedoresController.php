<?php

namespace App\Http\Controllers;

use App\Proveedores;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Proveedores::all();
        return view('layout/proveedores/list', array('proveedores' => $facturas));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedores;
        $proveedor->direccion = $request->input('direccion');
        $proveedor->fecha_alta = Carbon::now()->toDateTimeString();
        $proveedor->telefono = $request->input('telefono');
        $proveedor->save();
        return view('layout/proveedores/list', array('proveedores' => Proveedores::all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor = Proveedores::find($id);
        return view('layout/proveedores/show', array('proveedor' => $proveedor));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = Proveedores::find($id);
        return view('layout/proveedores/edit', array('proveedor' => $proveedor));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedor = Proveedores::find($id);
        $proveedor->direccion = $request->input('direccion');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->save();

        return view('layout/proveedores/show', array('proveedor' => $proveedor));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proveedores::destroy($id);
        return view('layout/proveedores/deleted');
    }
}
