<?php

namespace App\Http\Controllers;

use App\Models\parameters\tarifa;
use App\Models\parameters\data_hotel;
use App\Models\parameters\regimen;
use App\Models\parameters\claseHabitaciones;
use App\Models\parameters\TipoHabitaciones;
use Illuminate\Http\Request;

class TarifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels=data_hotel::select('id', 'razonComercial', 'logo')->get();
        $regimens=regimen::select('id', 'codigo')->get();
        $clases=claseHabitaciones::select('id', 'descripcion')->get();
        $tipo_habs=TipoHabitaciones::select('id','descripcion')->get();

        $data=tarifa::select('valorAlojamiento','temporada','relRegimen','relClaseHabitacion','tipo_habitacion','rel_hotel')->get();
        
        return view('parameters.tarifa.index', [
            'hotels'=>$hotels,
            'regimens'=>$regimens,
            'clases'=>$clases,
            'data'=>$data,
            'tipo_habs'=>$tipo_habs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels=data_hotel::select('id', 'razonComercial', 'logo')->get();
        $regimens=regimen::select('id', 'codigo')->get();
        $clases=claseHabitaciones::select('id', 'descripcion')->get();
        $data=tarifa::select('valorAlojamiento','temporada','relRegimen','relClaseHabitacion','tipo_habitacion','rel_hotel')->get();
        $tipo_habs=TipoHabitaciones::select('id','descripcion')->get();

        return view("parameters.tarifa.create", [
        'hotels'=>$hotels,
        'regimens'=>$regimens,
        'clases'=>$clases,
        'data'=>$data,
        'tipo_habs'=>$tipo_habs
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * Temporadas enum('Baja','Media','Alta','Especial')
     */

    public static function ingresarRegistro($temporada,$tipo,$clases,$regimens,$request,$hotel){
     
        foreach ($hotel as $reg_hotel) {
            foreach ($tipo as $reg_tipo) {
                foreach ($clases as $reg_clase) {
                    foreach ($regimens as $reg_regimen) {
                        $tipo_habitacion_converted=str_replace(' ','_',$reg_tipo->descripcion);
                        $registro="hotel_".$reg_hotel->id."_".$temporada."_".$tipo_habitacion_converted."_clase_".$reg_clase->id."_reg_".$reg_regimen->id;
                    
                        $valor=$request->$registro;
                        $tarifa= new tarifa();
                        $tarifa->valorAlojamiento=$valor;
                        $tarifa->temporada=$temporada;
                        $tarifa->relRegimen=$reg_regimen->id;
                        $tarifa->relClaseHabitacion=$reg_clase->id;
                        $tarifa->tipo_habitacion=$tipo_habitacion_converted;
                        $tarifa->rel_hotel=$reg_hotel->id;
                        $tarifa->save();
                    }
                }
            }
        }
    }
    public function store(Request $request)
    {
            tarifa::drop();
            $hotel=data_hotel::select('id', 'razonComercial')->get();
            $clases=claseHabitaciones::select('id', 'descripcion')->get();
            $regimens=regimen::select('id', 'codigo')->get();

            $tipo_habs=TipoHabitaciones::select('id','descripcion')->get();

            
                $this::ingresarRegistro("baja",$tipo_habs,$clases,$regimens,$request,$hotel);
                $this::ingresarRegistro("media",$tipo_habs,$clases,$regimens,$request,$hotel);
                $this::ingresarRegistro("alta",$tipo_habs,$clases,$regimens,$request,$hotel);
                $this::ingresarRegistro("especial",$tipo_habs,$clases,$regimens,$request,$hotel);
            
            // Inicio Guardad temporada baja - clase estandar
            
            return json_encode(['success' => true]);
        
    }

   

    public static function ExistenDatos(){
        $reg=tarifa::Existe_Tarifas();
        return $reg; 
    }
}
