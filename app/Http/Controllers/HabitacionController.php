<?php

namespace App\Http\Controllers;

use App\Models\parameters\habitacion;
use App\Models\parameters\data_hotel;
use App\Models\parameters\claseHabitaciones;
use App\Models\parameters\TipoHabitaciones;
use App\Models\parameters\sectoresHabitaciones;
use App\Models\parameters\habitacion_has_clases;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels=data_hotel::select('id','razonComercial','logo')->get();
        $info=habitacion::getDataHabitacionFull();
        return view("parameters.habitacions.index",['hotels'=>$hotels,'info'=>$info]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clases=claseHabitaciones::getClases();
        $tipos=TipoHabitaciones::getTipo();
        $sectores=sectoresHabitaciones::getSectores();
        $hotels=data_hotel::getHotels();
        return view("parameters.habitacions.create",["clases"=>$clases,"tipos"=>$tipos,"sectores"=>$sectores,"hotels"=>$hotels]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reg=new habitacion();
        $reg->num_habitacion=$request->num_habitacion;
        $reg->capacidad_huespedes=$request->capacidad_huespedes;
        $reg->estado=$request->estado;
        $reg->created_by=$request->id_user_create;
        $reg->tipo_hab_id=$request->tipo_hab;
        $reg->hotel_id=$request->hotel;

        $reg->save();
        //Creacion de Cuentas Bancarias
        $clases=$request->clase_array;
        $array = explode(',', $clases);
        foreach($array as $clase_id){

            $habitacion_has_clases = new habitacion_has_clases();
            $habitacion_has_clases->clase_hab_id=$clase_id;
            $habitacion_has_clases->habitacions_id=$reg->id;
            $habitacion_has_clases->save();
        }
    //    $reg->relBankAcc=$request->;
       return json_encode(['success' => true]);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function show(habitacion $habitacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=habitacion::findOrFail(\Hashids::decode($id)[0]);
        $clases=claseHabitaciones::getClases();
        $tipos=TipoHabitaciones::getTipo();
        $sectores=sectoresHabitaciones::getSectores();
        $hotels=data_hotel::getHotels();
        return view("parameters.habitacions.edit",["data"=>$data,"clases"=>$clases,"tipos"=>$tipos,"sectores"=>$sectores,"hotels"=>$hotels]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, habitacion $habitacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(habitacion $habitacion)
    {
        //
    }
}
