<?php

namespace App\Http\Controllers;

use App\Facturas;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Facturas::all();
        return view('layout/facturas/list', array('facturas' => $facturas));
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
        $factura = new Facturas();
        $factura->monto_total = $request->input('monto_total');
        $factura->fecha_emision = Carbon::now()->toDateTimeString();
        $factura->cliente_id = $request->input('cliente_id');
        $factura->save();
        return view('layout/facturas/list', array('facturas' => Facturas::all()));

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factura = Facturas::find($id);
        return view('layout/facturas/show', array('factura' => $factura));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factura = Facturas::find($id);

        return view('layout/facturas/edit', array('factura' => $factura));
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
        $factura = Facturas::find($id);
        $factura->monto_total = $request->input('monto_total');
        $factura->cliente_id = $request->input('cliente_id');
        $factura->save();

        return view('layout/facturas/show', array('factura' => $factura));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Facturas::destroy($id);
        return view('layout/facturas/deleted');
    }
}
