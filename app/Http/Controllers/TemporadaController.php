<?php

namespace App\Http\Controllers;

use App\Models\parameters\temporada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TemporadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=temporada::getTemporadaWithDays();
       
        return view('parameters.temporada.index',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $validator = Validator::make($request->all(), [
            'tipo' => 'bail|required|max:180',
            'codigo'=> 'bail|required|max:180',
            'newdateStart'=> 'bail|required',
            'newdateEnd'=> 'bail|required'
        ]);

        if ($validator->fails()) {
            return json_encode(['success' => false, 'data' =>$validator->errors()]);
        }
        if ($request->codigo != "F") {
            temporada::dropTemporadaBetween($request->newdateStart);
            temporada::dropTemporadaBetween($request->newdateEnd);
        }
        
        
        $data=new temporada;
        $data->inicio=$request->newdateStart;
        $data->fin=$request->newdateEnd;
        $data->tipo=$request->tipo;
        $data->codigo=$request->codigo;
        $data->save();
        return json_encode(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parameters\temporada  $temporada
     * @return \Illuminate\Http\Response
     */
    public function show(temporada $temporada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\temporada  $temporada
     * @return \Illuminate\Http\Response
     */
    public function edit(temporada $temporada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\temporada  $temporada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, temporada $temporada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\temporada  $temporada
     * @return \Illuminate\Http\Response
     */
    public function destroy(temporada $temporada)
    {
        //
    }
}
