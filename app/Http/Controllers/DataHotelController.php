<?php

namespace App\Http\Controllers;

use App\Models\parameters\data_hotel;
use Illuminate\Http\Request;

class DataHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("parameters.data_hotel.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("parameters.data_hotel.create");
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
     * @param  \App\Models\parameters\data_hotel  $data_hotel
     * @return \Illuminate\Http\Response
     */
    public function show(data_hotel $data_hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\data_hotel  $data_hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(data_hotel $data_hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\data_hotel  $data_hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data_hotel $data_hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\data_hotel  $data_hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(data_hotel $data_hotel)
    {
        //
    }
}
