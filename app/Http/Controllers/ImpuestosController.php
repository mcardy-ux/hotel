<?php

namespace App\Http\Controllers;

use App\Models\parameters\impuestos;
use App\Models\parameters\planCuentas;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class ImpuestosController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("parameters.impuestos.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puc=planCuentas::getPucs();
        return view("parameters.impuestos.create",['puc'=>$puc]);
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
            'nombre' => 'bail|required|max:180',
            'descripcion' => 'bail|required|max:180',
            'porcentaje' => 'bail|required',
            'puc' => 'bail|required',
            'created_by' => 'bail|required|max:10',
        ]);

        if ($validator->fails()) {
            return json_encode(['success' => false, 'data' =>$validator->errors()]);
        }else{
            $reg= new impuestos();
            $reg->nombreImpuesto=$request->nombre;
            $reg->porcentaje=$request->porcentaje;
            $reg->descripcionContable=$request->descripcion;
            $reg->rel_puc=$request->puc;
            $reg->created_by=$request->created_by;
            $reg->save();
            return json_encode(['success' => true]);
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\impuestos  $impuestos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $puc=planCuentas::getPucs();
        $data=impuestos::where('id',\Hashids::decode($id)[0])->first();
        return view("parameters.impuestos.edit",['data'=>$data,'puc'=>$puc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\impuestos  $impuestos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $reg=impuestos::findOrFail(\Hashids::decode($id)[0]);
        $reg->nombreImpuesto=$request->edit_nombre;
        $reg->porcentaje=$request->edit_porcentaje;
        $reg->descripcionContable=$request->edit_descripcion;
        $reg->rel_puc=$request->edit_puc;
        $reg->modified_by=$request->id_user_modify;
        $reg->save();
        
        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\impuestos  $impuestos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = impuestos::find(\Hashids::decode($id)[0])->delete();

        if($reg){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }
    public function ajaxRequestimpuestos(){
        $query = impuestos::all();
        return datatables($query)
        ->addColumn('puc',function ($query){
            $puc=planCuentas::select('codigoCuenta')->where('id','=',$query->rel_puc)->first();
           return '<strong>'.$puc->codigoCuenta.'</strong>';
        })
        ->addColumn('actions', function ($query) {
            return '<div class="dropdown d-inline-block">
                <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonUser" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="'. url('impuestos', [$query->encode_id,'edit']) .'">Editar</a>
                    <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
                </div>
            </div>';
        
        })
        ->rawColumns(['actions','puc'])
        ->make(true);
    }

    public static function ExistenDatos(){
        $reg=impuestos::Existe_Datos();
        return $reg; 
    }
}

