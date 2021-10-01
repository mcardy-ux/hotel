<?php

namespace App\Http\Controllers;

use App\Models\parameters\codigoVenta;
use App\Models\parameters\planCuentas;
use App\Models\parameters\impuestos;
use App\Models\parameters\centro;
use App\Models\parameters\agrupacionVentas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CodigoVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('parameters.codigoVenta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puc=planCuentas::getPucs();
        $impuestos=impuestos::getImpuestos();
        $centros=centro::getCentros();
        $agrupacion=agrupacionVentas::getAgrupacion();
        return view('parameters.codigoVenta.create',[
            'puc'=>$puc,
            'impuestos'=>$impuestos,
            'centros'=>$centros,
            'agrupacion'=>$agrupacion
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
            'descripcion' => 'bail|required|max:250',
            'descripcionContable' => 'bail|required|max:250',
            'puc' => 'bail|required|max:180',
            'rel_impuesto'=>'bail|required|max:180',
            'rel_agrupacion'=>'bail|required|max:180',
            'created_by' => 'bail|required|max:10',
        ]);
 
        if ($validator->fails()) {
            return json_encode(['success' => false, 'data' =>$validator->errors()]);
        }
        else{
            $res=new codigoVenta();
            $res->descripcion=$request->descripcion;
            $res->descripcionContable=$request->descripcionContable;
            $res->estado=$request->estado;
            $res->rel_puc=$request->puc;
            $res->rel_impuesto=$request->rel_impuesto;
            $res->rel_agrupacion=$request->rel_agrupacion;
            $res->rel_centro=$request->rel_centro;
            $res->created_by=$request->created_by;
            $res->save();

            return json_encode(['success' => true]); 
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\codigoVenta  $codigoVenta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $puc=planCuentas::getPucs();
        $impuestos=impuestos::getImpuestos();
        $centros=centro::getCentros();
        $agrupacion=agrupacionVentas::getAgrupacion();
        $data=codigoVenta::where('id',\Hashids::decode($id)[0])->first();
        return view('parameters.codigoVenta.edit',[
            'data'=>$data,
            'puc'=>$puc,
            'impuestos'=>$impuestos,
            'centros'=>$centros,
            'agrupacion'=>$agrupacion
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\codigoVenta  $codigoVenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reg=codigoVenta::findOrFail(\Hashids::decode($id)[0]);
        $reg->descripcion=$request->edit_descripcion;
        $reg->descripcionContable=$request->edit_descripcionContable;
        $reg->estado=$request->edit_estado;
        $reg->rel_puc=$request->edit_puc;
        $reg->rel_impuesto=$request->edit_rel_impuesto;
        $reg->rel_agrupacion=$request->edit_rel_agrupacion;
        $reg->rel_centro=$request->edit_rel_centro;
        $reg->modified_by=$request->id_user_modify;
        $reg->save();
        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\codigoVenta  $codigoVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = codigoVenta::find(\Hashids::decode($id)[0])->delete();

        if($reg){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }

    public function ajaxRequestcodigoVenta(){
        $query = codigoVenta::all();
        return datatables($query)
        ->addColumn('estado_button',function ($query){
            if ($query->estado=="activo") {
                return '<span class="badge badge-success mb-1">Activo</span>';
            }elseif ($query->estado=="inactivo") {
                return '<span class="badge badge-warning mb-1">Inactivo</span>';
            }elseif ($query->estado=="bloqueado") {
                return '<span class="badge badge-danger mb-1">Bloqueado</span>';
            }
            
        })
        ->addColumn('puc_or',function ($query){
            $puc=planCuentas::select('codigoCuenta')->where('id','=',$query->rel_puc)->first();
           return '<strong>'.$puc->codigoCuenta.'</strong>';
        })
        ->addColumn('impuesto',function ($query){
            $impuesto=impuestos::select('nombreImpuesto')->where('id','=',$query->rel_impuesto)->first();
           return '<strong>'.$impuesto->nombreImpuesto.'</strong>';
        })
        ->addColumn('agrupacion',function ($query){
            $agrupacion=agrupacionVentas::select('descripcion')->where('id','=',$query->rel_agrupacion)->first();
           return '<strong>'.$agrupacion->descripcion.'</strong>';
        })
        ->addColumn('centro',function ($query){
            if($query->rel_centro!="" || $query->rel_centro!=null){
                $centro=centro::select('nombre')->where('id','=',$query->rel_centro)->first();
                return '<strong>'.$centro->nombre.'</strong>';
            }else{
                return '<strong> - </strong>';
            }
            
        })
        ->addColumn('actions', function ($query) {
            return '<div class="dropdown d-inline-block">
                <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonUser" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="'. url('codigoVenta', [$query->encode_id,'edit']) .'">Editar</a>
                    <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
                </div>
            </div>';
        
        })
        ->rawColumns(['actions','estado_button','puc_or','impuesto','agrupacion','centro'])
        ->make(true);
    }

    public static function ExistenDatos(){
        $reg=codigoVenta::Existe_Datos();
        return $reg; 
    }
}
