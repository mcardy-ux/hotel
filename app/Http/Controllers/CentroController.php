<?php

namespace App\Http\Controllers;

use App\Models\parameters\centro;
use App\Models\parameters\planCuentas;
use App\Models\parameters\departament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('parameters.centro.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dptos=departament::getDepartamentsWithHotel();
        return view('parameters.centro.create',['dptos'=>$dptos]);
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
            'codigo' => 'bail|required|max:180',
            'nombre' => 'bail|required|max:180',
            'departamento' => 'bail|required|max:180',
            'tipo' => 'bail|required|max:180',
            'created_by' => 'bail|required|max:10',
        ]);
 
        if ($validator->fails()) {
            return json_encode(['success' => false, 'data' =>$validator->errors()]);
        }
        else{
            $res=new centro();
            $res->codigo=$request->codigo;
            $res->nombre=$request->nombre;
            $res->rel_departaments=$request->departamento;
            $res->tipo=$request->tipo;
            $res->created_by=$request->created_by;
            $res->save();

            return json_encode(['success' => true]); 
        }
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dptos=departament::getDepartamentsWithHotel();
        $data=centro::where('id',\Hashids::decode($id)[0])->first();
        return view("parameters.centro.edit",['data'=>$data,"dptos"=>$dptos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reg=centro::findOrFail(\Hashids::decode($id)[0]);
        $reg->codigo=$request->edit_codigo;
        $reg->nombre=$request->edit_nombre;
        $reg->rel_departaments=$request->edit_departamento;
        $reg->tipo=$request->edit_tipo;
        $reg->modified_by=$request->id_user_modify;
        $reg->save();
        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = centro::find(\Hashids::decode($id)[0])->delete();
 
        if($reg){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }
    public function ajaxRequestCentro(){
        $query = centro::all();
        
        return datatables($query)
        ->addColumn('departamento',function ($query){
            $departamento=departament::getDepartamentsWithHotelById($query->rel_departaments)->first();
           return '<strong>'.$departamento->secvalue.'</strong> - '.$departamento->value;
        })
        ->addColumn('actions', function ($query) {
            return '<div class="dropdown d-inline-block">
                <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonUser" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="'. url('centro', [$query->encode_id,'edit']) .'">Editar</a>
                    <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
                </div>
            </div>';
        
        })
        ->addColumn('tipo_coloreado', function ($query) {
            
        
        })
        ->rawColumns(['actions','estado_button','departamento'])
        ->make(true);
    }
}
