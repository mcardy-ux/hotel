<?php

namespace App\Http\Controllers;

use App\Models\parameters\formasPago;
use App\Models\parameters\planCuentas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormasPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("parameters.formaPago.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puc=planCuentas::getPucs();
       return view("parameters.formaPago.create",["puc"=>$puc]);
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
            'estado' => 'bail|required|max:180',
            'formaPago' => 'bail|required|max:180',
            'descripcion' => 'bail|required|max:180',
            'created_by' => 'bail|required|max:10',
        ]);
 
        if ($validator->fails()) {
            return json_encode(['success' => false, 'data' =>$validator->errors()]);
        }
        else{
            $res=new formasPago();
            $res->estado=$request->estado;
            $res->formaPago=$request->formaPago;
            $res->descripcion=$request->descripcion;
            $res->rel_puc=$request->puc;
            $res->created_by=$request->created_by;
            $res->save();

            return json_encode(['success' => true]); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\formasPago  $formasPago
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $puc=planCuentas::getPucs();
        $data=formasPago::where('id',\Hashids::decode($id)[0])->first();
        return view("parameters.formaPago.edit",['data'=>$data,"puc"=>$puc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\formasPago  $formasPago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reg=formasPago::findOrFail(\Hashids::decode($id)[0]);
        $reg->formaPago=$request->edit_forma;
        $reg->descripcion=$request->edit_descripcion;
        $reg->estado=$request->edit_estado;
        $reg->rel_puc=$request->edit_puc;
        $reg->modified_by=$request->id_user_modify;
        $reg->save();
        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\formasPago  $formasPago
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = formasPago::find(\Hashids::decode($id)[0])->delete();
 
        if($reg){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }


    public function ajaxRequestformaPago(){
        $query = formasPago::all();
        
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
                    <a class="dropdown-item" href="'. url('formaPago', [$query->encode_id,'edit']) .'">Editar</a>
                    <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
                </div>
            </div>';
        
        })
        ->rawColumns(['actions','estado_button','puc'])
        ->make(true);
    }

    public static function ExistenDatos(){
        $reg=formasPago::Existe_Datos();
        return $reg; 
    }
}
