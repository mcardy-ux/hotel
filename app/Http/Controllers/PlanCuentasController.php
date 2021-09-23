<?php

namespace App\Http\Controllers;

use App\Models\parameters\planCuentas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlanCuentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("parameters.planCuentas.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("parameters.planCuentas.create");
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
            'codigoCuenta' => 'bail|required|unique:plan_cuentas|max:180',
            'nombreCuenta' => 'bail|required|max:180',
            'centroInventario' => 'bail|required|max:6',
            'centroCosto' => 'bail|required|max:6',
            'centroVenta' => 'bail|required|max:6',
            'terceros' => 'bail|required|max:180',
            'created_by' => 'bail|required|max:10',
        ]);
        if ($validator->fails()) {
            return json_encode(['success' => false, 'data' =>$validator->errors()]);
        }else{
            $reg = new planCuentas();
            $reg->codigoCuenta=$request->codigoCuenta;
            $reg->nombreCuenta=$request->nombreCuenta;
            $reg->centroInventario=$request->centroInventario;
            $reg->centroCosto=$request->centroCosto;
            $reg->centroVenta=$request->centroVenta;
            $reg->terceros=$request->terceros;
            $reg->save();
            return json_encode(['success' => true]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\planCuentas  $planCuentas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=planCuentas::where('id',\Hashids::decode($id)[0])->first();
        return view("parameters.planCuentas.edit",['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\planCuentas  $planCuentas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reg=planCuentas::findOrFail(\Hashids::decode($id)[0]);
        $reg->codigoCuenta=$request->edit_codigoCuenta;
        $reg->nombreCuenta=$request->edit_nombreCuenta;
        $reg->centroInventario=$request->edit_centroInventario;
        $reg->centroCosto=$request->edit_centroCosto;
        $reg->centroVenta=$request->edit_centroVenta;
        $reg->terceros=$request->edit_terceros;
        $reg->modified_by=$request->id_user_modify;
        $reg->save();
        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\planCuentas  $planCuentas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = planCuentas::find(\Hashids::decode($id)[0])->delete();

        if($reg){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }
    public function ajaxRequestplanCuentas(){
        $query = planCuentas::all();
        return datatables($query)
        
        ->addColumn('actions', function ($query) {
            return '<div class="dropdown d-inline-block">
                <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonUser" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="'. url('planCuentas', [$query->encode_id,'edit']) .'">Editar</a>
                    <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
                </div>
            </div>';
        
        })
        ->rawColumns(['actions'])
        ->make(true);
    }
}
