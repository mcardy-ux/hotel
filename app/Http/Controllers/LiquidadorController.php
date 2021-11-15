<?php

namespace App\Http\Controllers;

use App\Models\front\liquidador;
use Illuminate\Http\Request;

class LiquidadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view("datos.liquidador.index");
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
     * @param  \App\Models\front\liquidador  $liquidador
     * @return \Illuminate\Http\Response
     */
    public function show(liquidador $liquidador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\front\liquidador  $liquidador
     * @return \Illuminate\Http\Response
     */
    public function edit(liquidador $liquidador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\front\liquidador  $liquidador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, liquidador $liquidador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\front\liquidador  $liquidador
     * @return \Illuminate\Http\Response
     */
    public function destroy(liquidador $liquidador)
    {
        //
    }
}
