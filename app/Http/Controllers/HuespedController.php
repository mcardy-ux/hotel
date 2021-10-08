<?php

namespace App\Http\Controllers;

use App\Models\front\huesped;
use Illuminate\Http\Request;
use App\Models\parameters\data_hotel;
use App\Models\parameters\tipo_documento;
use App\Models\parameters\tipoCliente;
use App\Models\parameters\regimen;
use App\Models\parameters\formasPago;
use App\Models\parameters\location;
use Illuminate\Support\Facades\Validator;
class HuespedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avaliable_hotels=data_hotel::getHotels();
        $count_Hotel=data_hotel::CountHotel();
        return view('datos.huesped.index',['avaliable_hotels'=>$avaliable_hotels,'count_Hotel'=>$count_Hotel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $avaliable_hotels=data_hotel::getHotels();
        $count_Hotel=data_hotel::CountHotel();
        //Selects
        $tipo_docs=tipo_documento::getTipoDocumentos();
        $tipoCliente=tipoCliente::getTipoCliente();
        $regimenes=regimen::getRegimenes();
        $formaPago=formasPago::getFormaPago();
        $paises=location::getPaises();
        return view('datos.huesped.create',[
            'avaliable_hotels'=>$avaliable_hotels,
            'count_Hotel'=> $count_Hotel,
            'tipo_docs'=>$tipo_docs, 
            'tipoCliente'=>$tipoCliente,
            'regimenes'=>$regimenes,
            'formaPago'=>$formaPago,
            'paises'=>$paises,
        ]);
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
            'numero_doc' => 'bail|required|unique:huespeds|max:180',
            'tipo_doc' => 'bail|required|max:180',
            'lugar_exp' => 'bail|required|max:180',
            'ciudad_exp' => 'bail|required|max:190',
            'fecha_nacimiento' => 'bail|required|max:180',
            'primer_nombre' => 'bail|required|max:250',
            'segundo_nombre' => 'bail|nullable|max:250', 
            'primer_apellido' => 'bail|required|max:250',
            'segundo_apellido' => 'bail|nullable|max:250',
            'genero' => 'bail|required|max:180',
            'direccion' => 'bail|nullable|max:180',
            'nacionalidad' => 'bail|required|max:180',
            'ciudad' => 'bail|required|max:180',
            'telefono' => 'bail|nullable|max:180',
            'celular' => 'bail|nullable|max:180',
            'email' => 'bail|nullable|max:180',
            'tipo_huesped' => 'bail|required|max:180',
            'tarifa' => 'bail|required|max:180',
            'forma_pago' => 'bail|required|max:180',
            'rel_hotel' => 'bail|required|max:180',
        ]);

        if ($validator->fails()) {
            return json_encode(['success' => false, 'data' =>$validator->errors()]);
        }

        // Retrieve the validated input...
        $validated = $validator->validated();
        $validated["fecha_nacimiento"]=date("Y-m-d", strtotime($request->fecha_nacimiento));
      
        huesped::create($validated);
        return json_encode(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\front\huesped  $huesped
     * @return \Illuminate\Http\Response
     */
    public function show(huesped $huesped)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\front\huesped  $huesped
     * @return \Illuminate\Http\Response
     */
    public function edit(huesped $huesped)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\front\huesped  $huesped
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, huesped $huesped)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\front\huesped  $huesped
     * @return \Illuminate\Http\Response
     */
    public function destroy(huesped $huesped)
    {
        //
    }

    public function ajaxRequestHuespedes(){
        $query = huesped::all();
        return datatables($query)
        ->addColumn('documento',function ($query){
           return $query->tipo_doc.' - '.$query->numero_doc;
        })
        ->addColumn('nombre_completo',function ($query){
            return $query->primer_nombre.' '.$query->segundo_nombre.' '.$query->primer_apellido.' '.$query->segundo_apellido;
        })
        ->addColumn('actions', function ($query) {
            return '<div class="dropdown d-inline-block">
                <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonUser" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="'. url('huespedes', [$query->encode_id,'edit']) .'">Editar</a>
                    <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
                </div>
            </div>';
        
        })
        ->rawColumns(['actions','estado_button','puc_or','impuesto','agrupacion','centro'])
        ->make(true);
    }
    
}
