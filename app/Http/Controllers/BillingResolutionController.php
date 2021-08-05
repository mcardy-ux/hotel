<?php

namespace App\Http\Controllers;

use App\Models\parameters\billingResolution;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BillingResolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("parameters.billing.index");
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
     * @param  \App\Models\parameters\billingResolution  $billingResolution
     * @return \Illuminate\Http\Response
     */
    public function show(billingResolution $billingResolution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\billingResolution  $billingResolution
     * @return \Illuminate\Http\Response
     */
    public function edit(billingResolution $billingResolution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\billingResolution  $billingResolution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, billingResolution $billingResolution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\billingResolution  $billingResolution
     * @return \Illuminate\Http\Response
     */
    public function destroy(billingResolution $billingResolution)
    {
        //
    }

    //Seccion de Datatables

    public function ajaxRequestBilling(){
        $query = billingResolution::select('id','numResolucion','fechaResolucion','desde','hasta');
        return datatables($query)
        ->make(true);
    }
}
