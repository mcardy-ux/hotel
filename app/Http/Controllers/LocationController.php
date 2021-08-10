<?php

namespace App\Http\Controllers;

use App\Models\parameters\location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos=location::getDepartaments();
        return view("parameters.locations.index",['departamentos'=>$departamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("parameters.locations.create");
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
     * @param  \App\Models\parameters\location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(location $location)
    {
        //
    }


    public function ajaxRequestCities(Request $request){
        $data = location::getListCitiesByDepartament($request->valor);
        return $data;
    }


    //Inicio Metodos Personalizados
    public function ajaxRequestDepartaments($id)
    {  
        $data=location::getListCitiesByDepartament($id);
        return json_encode(['success' => true,'data'=>$data]);
    }
}
