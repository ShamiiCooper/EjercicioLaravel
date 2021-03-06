<?php

namespace App\Http\Controllers;

use App\Clientes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        return view('layout/clientes/list', array('clientes' => $clientes));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Clientes();
        $client->nombre = $request->input('nombre');
        $client->direccion = $request->input('direccion');
        $client->fecha_alta = Carbon::now();
        $client->save();
        return view('layout/clientes/list', array('clientes' => Clientes::all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Clientes::find($id);
        return view('layout/clientes/show', array('cliente' => $client));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Clientes::find($id);
        return view('layout/clientes/edit', array('cliente' => $client));
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
        $client = Clientes::find($id);
        $client->nombre = $request->input('nombre');
        $client->direccion = $request->input('direccion');
        $client->save();

        return view('layout/clientes/show', array('cliente' => $client));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clientes::destroy($id);
        return view('layout/clientes/deleted');
    }

}
