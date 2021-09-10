<?php

namespace App\Http\Controllers;

use App\Models\Investigador;
use Illuminate\Http\Request;
use App\Models\Contacto;

class InvestigadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigador = Investigador::all();
        $contacto = Contacto::first();

        return view ('cliente.investigador', ['contacto' => $contacto, 'investigador'=> $investigador]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function show(Investigador $investigador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function edit(Investigador $investigador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investigador $investigador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investigador $investigador)
    {
        //
    }
}
