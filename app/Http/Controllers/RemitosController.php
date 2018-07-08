<?php

namespace App\Http\Controllers;

use App\Remitos;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RemitosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remitos = Remitos::all();
        return view('layout/remitos/list', array('remitos' => $remitos));
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
        $remito = new Remitos();
        $remito->monto_total = $request->input('monto_total');
        $remito->fecha_emision = Carbon::now()->toDateTimeString();
        $remito->proveedor_id = $request->input('proveedor_id');
        $remito->save();
        return view('layout/remitos/list', array('remitos', Remitos::all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $remito = Remitos::find($id);
        return view('layout/remitos/show', array('remito' => $remito));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $remito = Proveedores::find($id);
        return view('layout/remitos/edit', array('remito' => $remito));
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
        $remito = Proveedores::find($id);
        $remito->monto_total = $request->input('monto_total');
        $remito->proveedor_id = $request->input('proveedor_id');
        $remito->save();

        return view('layout/remitos/show', array('remito' => $remito));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Remitos::destroy($id);
        return view('layout/remitos/deleted');
    }
}
