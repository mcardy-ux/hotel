<?php

namespace App\Http\Controllers;

use App\Models\parameters\tarifa;
use App\Models\parameters\data_hotel;
use App\Models\parameters\regimen;
use App\Models\parameters\claseHabitaciones;
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


        $data=tarifa::select('valorAlojamiento','temporada','relRegimen','relClaseHabitacion','tipo_habitacion')->get();
        
        return view('parameters.tarifa.index', [
            'hotels'=>$hotels,
            'regimens'=>$regimens,
            'clases'=>$clases,
            'data'=>$data
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
        $data=tarifa::select('valorAlojamiento','temporada','relRegimen','relClaseHabitacion','tipo_habitacion')->get();

        return view("parameters.tarifa.create", [
        'hotels'=>$hotels,
        'regimens'=>$regimens,
        'clases'=>$clases,
        'data'=>$data
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * Temporadas enum('Baja','Media','Alta','Especial')
     */

    public static function ingresarRegistro($temporada,$tipo,$clases,$regimens,$request){
        for ($contadorClase=1; $contadorClase <= $clases->count(); $contadorClase++) {
            for ($contadorRegimens=1; $contadorRegimens <= $regimens->count(); $contadorRegimens++) {
                
                $registro=$temporada."_".$tipo."_clase_".$contadorClase."_reg_".$contadorRegimens;
                $valor=$request->$registro;
                $tarifa= new tarifa();
                $tarifa->valorAlojamiento=$valor;
                $tarifa->temporada=$temporada;
                $tarifa->relRegimen=$contadorRegimens;
                $tarifa->relClaseHabitacion=$contadorClase;
                $tarifa->tipo_habitacion=$tipo;
                $tarifa->save();
            }
        }
    }
    public function store(Request $request)
    {
        $data=tarifa::truncate();
        if($data){
            $clases=claseHabitaciones::select('id', 'descripcion')->get();
            $regimens=regimen::select('id', 'codigo')->get();
            // Inicio Guardad temporada baja - clase estandar
            $this::ingresarRegistro("baja","estandar",$clases,$regimens,$request);
            $this::ingresarRegistro("baja","jrsuite",$clases,$regimens,$request);
            $this::ingresarRegistro("media","estandar",$clases,$regimens,$request);
            $this::ingresarRegistro("media","jrsuite",$clases,$regimens,$request);
            $this::ingresarRegistro("alta","estandar",$clases,$regimens,$request);
            $this::ingresarRegistro("alta","jrsuite",$clases,$regimens,$request);
            $this::ingresarRegistro("especial","estandar",$clases,$regimens,$request);
            $this::ingresarRegistro("especial","jrsuite",$clases,$regimens,$request);
            return json_encode(['success' => true]);
        }
    }

   

    public static function ExistenDatos(){
        $reg=tarifa::Existe_Tarifas();
        return $reg; 
    }
}
