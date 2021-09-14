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
        $reg->sector_hab_id=$request->sector_hab;
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
        $arrayClasesHabitacions=habitacion_has_clases::getClassesByHabitacion(\Hashids::decode($id)[0]);



        return view("parameters.habitacions.edit",["data"=>$data,"arrayClasesHabitacions"=>$arrayClasesHabitacions,"clases"=>$clases,"tipos"=>$tipos,"sectores"=>$sectores,"hotels"=>$hotels]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $newId=\Hashids::decode($id)[0];
        $reg = habitacion::findOrFail($newId);
        
        $reg->num_habitacion=$request->data[2]['value'];
        $reg->capacidad_huespedes=$request->data[3]['value'];
        $reg->estado=$request->data[6]['value'];
        $reg->modified_by=$request->data[1]['value'];
        $reg->sector_hab_id=$request->data[4]['value'];
        $reg->tipo_hab_id=$request->data[5]['value'];
        $reg->hotel_id=$request->data[7]['value'];
        //Edicion de Cuentas Bancarias
        $EliminarClases=habitacion_has_clases::DropByHabitacion($newId);
        if ($EliminarClases) {
            foreach($request->array as $clase_id){

                $claseHabitacion = new habitacion_has_clases();
                $claseHabitacion->clase_hab_id=$clase_id;
                $claseHabitacion->habitacions_id=$newId;
                $claseHabitacion->save();
            }
            $reg->save();
            return json_encode(['success' => true]);
        }
        return json_encode(['success' => false]);
       

       
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
    public static function ExistenDatos(){
        $reg=habitacion::HasHabitacions();
        return $reg;
    }
}
