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
        if ($request->validacion_registro=="true") {
            $validator = Validator::make($request->all(), [
                'validacion_registro'=>'bail|required|max:180',
                'numero_doc' => 'bail|required|unique:huespeds|max:180',
                'tipo_doc'=>'bail|required|max:180',
                'lugar_exp'=>'bail|nullable|max:180',
                'ciudad_exp'=>'bail|nullable|max:180',
                'fecha_nacimiento'=>'bail|nullable|max:180',
                'primer_nombre' => 'bail|required|max:250',
                'segundo_nombre' => 'bail|nullable|max:250',
                'primer_apellido' => 'bail|required|max:250',
                'segundo_apellido' => 'bail|nullable|max:250',
                'genero' => 'bail|required|max:180',
                'direccion' => 'bail|required|max:180',
                'telefono' => 'bail|required|max:180',
                'celular'=>'bail|nullable|max:180',
                'email' => 'bail|required|max:180',
                'nacionalidad' => 'bail|nullable|max:180',
                'ciudad' => 'bail|nullable|max:180',
                'tipo_huesped' => 'bail|required|max:180',
                'tarifa' => 'bail|required|max:180',
                'forma_pago' => 'bail|required|max:180',
                'rel_hotel' => 'bail|required|max:180',
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'validacion_registro'=>'bail|required|max:180',
                'id_registro' => 'bail|required|unique:huespeds|max:180',
                'lugar_exp'=>'bail|nullable|max:180',
                'ciudad_exp'=>'bail|nullable|max:180',
                'fecha_nacimiento'=>'bail|nullable|max:180',
                'primer_nombre' => 'bail|required|max:250',
                'segundo_nombre' => 'bail|nullable|max:250',
                'primer_apellido' => 'bail|required|max:250',
                'segundo_apellido' => 'bail|nullable|max:250',
                'genero' => 'bail|required|max:180',
                'direccion' => 'bail|required|max:180',
                'telefono' => 'bail|required|max:180',
                'celular'=>'bail|nullable|max:180',
                'email' => 'bail|required|max:180',
                'nacionalidad' => 'bail|nullable|max:180',
                'ciudad' => 'bail|nullable|max:180',
                'tipo_huesped' => 'bail|required|max:180',
                'tarifa' => 'bail|required|max:180',
                'forma_pago' => 'bail|required|max:180',
                'rel_hotel' => 'bail|required|max:180',
            ]);
        }

       

        if ($validator->fails()) {
            return json_encode(['success' => false, 'data' =>$validator->errors()]);
        }

        // Retrieve the validated input...
        $validated = $validator->validated();
        $validated["fecha_nacimiento"]=date("Y-m-d", strtotime($request->fecha_nacimiento));
        if ($request->validacion_registro=="true") {
            $validated["validacion_registro"]=true;
        }
        if ($request->validacion_registro=="false") {
            $validated["validacion_registro"]=false;
        }
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
    public function edit($id)
    {
        $data=huesped::where('id',\Hashids::decode($id)[0])->first();
        $avaliable_hotels=data_hotel::getHotels();
        $count_Hotel=data_hotel::CountHotel();
        //Selects
        $tipo_docs=tipo_documento::getTipoDocumentos();
        $tipoCliente=tipoCliente::getTipoCliente();
        $regimenes=regimen::getRegimenes();
        $formaPago=formasPago::getFormaPago();
        $paises=location::getPaises();

        return view('datos.huesped.edit',[
            'data'=>$data,
            'avaliable_hotels'=>$avaliable_hotels,
            'count_Hotel'=> $count_Hotel,
            'tipo_docs'=>$tipo_docs, 
            'tipoCliente'=>$tipoCliente,
            'regimenes'=>$regimenes,
            'formaPago'=>$formaPago,
            'paises'=>$paises        
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\front\huesped  $huesped
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reg=huesped::findOrFail(\Hashids::decode($id)[0]);
        $reg->numero_doc=$request->edit_numero_doc;
        $reg->tipo_doc=$request->edit_tipo_doc;
        $reg->lugar_exp=$request->edit_lugar_exp;
        $reg->ciudad_exp=$request->edit_ciudad_exp;
        $reg->fecha_nacimiento=date("Y-m-d", strtotime($request->edit_fecha_nacimiento));
        $reg->primer_nombre=$request->edit_primer_nombre;
        $reg->segundo_nombre=$request->edit_segundo_nombre;
        $reg->primer_apellido=$request->edit_primer_apellido;
        $reg->segundo_apellido=$request->edit_segundo_apellido;
        $reg->genero=$request->edit_genero;
        $reg->direccion=$request->edit_direccion;
        $reg->nacionalidad=$request->edit_nacionalidad;
        $reg->ciudad=$request->edit_ciudad;
        $reg->telefono=$request->edit_telefono;
        $reg->celular=$request->edit_celular;
        $reg->email=$request->edit_email;
        $reg->tipo_huesped=$request->edit_tipo_huesped;
        $reg->tarifa=$request->edit_tarifa;
        $reg->forma_pago=$request->edit_forma_pago;
        $reg->rel_hotel=$request->rel_hotel;
        $reg->save();
        return json_encode(['success' => true]);
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

    public function ajaxRequestHuespedes($id){
        $query = huesped::all()->where("rel_hotel","=",$id);
        
        return datatables($query)
        ->addColumn('documento',function ($query){
            if($query->validacion_registro){
                $tipo_doc=tipo_documento::getDocumentosById($query->tipo_doc);
                return $tipo_doc->codigo.' - '.$query->numero_doc;
            }else{
                return 'ID - '.$query->id_registro;
            }
           
        })
        ->addColumn('nombre_completo',function ($query){
            return $query->primer_nombre.' '.$query->segundo_nombre.' '.$query->primer_apellido.' '.$query->segundo_apellido;
        })
        ->addColumn('porcentaje_datos', function ($query) {
            $numero=huesped::getPorcentajeDatosCompletados($query->id);
            $dataofshet=0;
            if($numero>0&&$numero<10){$dataofshet=290;};
            if($numero>10&&$numero<20){$dataofshet=261;};
            if($numero>20&&$numero<30){$dataofshet=232;};
            if($numero>30&&$numero<40){$dataofshet=203;};
            if($numero>40&&$numero<50){$dataofshet=174;};
            if($numero>50&&$numero<60){$dataofshet=145;};
            if($numero>60&&$numero<70){$dataofshet=116;};
            if($numero>70&&$numero<80){$dataofshet=87;};
            if($numero>80&&$numero<90){$dataofshet=58;};
            if($numero>90&&$numero<95){$dataofshet=29;};
            if($numero>95&&$numero<=100){$dataofshet=0;};
            return '<div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="'.$numero.'" data-show-percent="true">
            <svg viewBox="0 0 100 100" style="display: block; width: 100%;"><path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#d7d7d7" stroke-width="4" 
            fill-opacity="0"></path><path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#922c88" 
            stroke-width="4" fill-opacity="0" style="stroke-dasharray: 301.635px, 301.635px; stroke-dashoffset: '.$dataofshet.'px;">
            </path></svg><div class="progressbar-text" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(146, 44, 136);">'.$numero.'%</div></div>';
        
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
        ->rawColumns(['actions','documento','nombre_completo','porcentaje_datos'])
        ->make(true);
    }
    
}
