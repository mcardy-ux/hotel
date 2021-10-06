<?php

namespace App\Http\Controllers;

use App\Models\parameters\planCuentas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\parameters\planCuenta_has_centros;
use PhpParser\Node\Stmt\Else_;

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
            'created_by' => 'bail|required|max:10',
        ]);
        if ($validator->fails()) {
            return json_encode(['success' => false, 'data' =>$validator->errors()]);
        }else{
            $reg = new planCuentas();
            $reg->codigoCuenta=$request->codigoCuenta;
            $reg->nombreCuenta=$request->nombreCuenta;
            $reg->terceros=$request->terceros;
            $reg->created_by=$request->id_user_create;
            $reg->save();

            //Creacion de centro de inventario
            $centro_Inventario=$request->centro_Inventario;
            if ($centro_Inventario != null) {
                $array = explode(',', $centro_Inventario);
                foreach($array as $centro_inv_id){

                    $planCuenta_has_centros = new planCuenta_has_centros();
                    $planCuenta_has_centros->planCuenta_id=$reg->id;
                    $planCuenta_has_centros->centro_id=$centro_inv_id;
                    $planCuenta_has_centros->save();
                }
            }

            //Creacion de centro de inventario
            $centro_Costo=$request->centro_Costo;
            if ($centro_Costo != null) {
                $array = explode(',', $centro_Costo);
                foreach($array as $centro_costo_id){

                    $planCuenta_has_centros = new planCuenta_has_centros();
                    $planCuenta_has_centros->planCuenta_id=$reg->id;
                    $planCuenta_has_centros->centro_id=$centro_costo_id;
                    $planCuenta_has_centros->save();
                }
            }

            //Creacion de centro de inventario
            $centro_Venta=$request->centro_Venta;
            if ($centro_Venta != null) {
                $array = explode(',', $centro_Venta);
                foreach($array as $centro_venta_id){

                    $planCuenta_has_centros = new planCuenta_has_centros();
                    $planCuenta_has_centros->planCuenta_id=$reg->id;
                    $planCuenta_has_centros->centro_id=$centro_venta_id;
                    $planCuenta_has_centros->save();
                }
            }
            
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
        $planWithCentros=planCuentas::getCentrosExplicitId(\Hashids::decode($id)[0]);

        $centros=array();
        foreach ($planWithCentros as $key ) {
            array_push($centros,$key->centro_id);
        }
        return view("parameters.planCuentas.edit",['data'=>$data,'centros'=>$centros]);
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
        $reg->terceros=$request->edit_terceros;
        $reg->modified_by=$request->id_user_modify;
        
        planCuenta_has_centros::DropByPlan(\Hashids::decode($id)[0]);
        
        //Creacion de centro de inventario
        $centro_Inventario=$request->edit_centroInventario;
        if ($centro_Inventario != null) {
            $array = explode(',', $centro_Inventario);
            foreach($array as $centro_inv_id){

                $planCuenta_has_centros = new planCuenta_has_centros();
                $planCuenta_has_centros->planCuenta_id=$reg->id;
                $planCuenta_has_centros->centro_id=$centro_inv_id;
                $planCuenta_has_centros->save();
            }
        }

        //Creacion de centro de inventario
        $centro_Costo=$request->edit_centroCosto;
        if ($centro_Costo != null) {
            $array = explode(',', $centro_Costo);
            foreach($array as $centro_costo_id){

                $planCuenta_has_centros = new planCuenta_has_centros();
                $planCuenta_has_centros->planCuenta_id=$reg->id;
                $planCuenta_has_centros->centro_id=$centro_costo_id;
                $planCuenta_has_centros->save();
            }
        }

        //Creacion de centro de inventario
        $centro_Venta=$request->edit_centroVenta;
        if ($centro_Venta != null) {
            $array = explode(',', $centro_Venta);
            foreach($array as $centro_venta_id){

                $planCuenta_has_centros = new planCuenta_has_centros();
                $planCuenta_has_centros->planCuenta_id=$reg->id;
                $planCuenta_has_centros->centro_id=$centro_venta_id;
                $planCuenta_has_centros->save();
            }
        }

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
        $plan_centros = planCuenta_has_centros::DropByPlan(\Hashids::decode($id)[0]);
        $reg = planCuentas::find(\Hashids::decode($id)[0])->delete();
    
        if($reg && $plan_centros){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }
    public function ajaxRequestplanCuentas(){
        $query = planCuentas::all();
        return datatables($query)
        ->addColumn('centros', function ($query) {
            return '
            
            <a onclick="viewCentros(this)" id="'.$query->encode_id.'">
            <span class="badge badge-pill badge-outline-success mb-1"> Ver</span>
             </a>
            ';
        
        })
        ->addColumn('tereceros_valid', function ($query) {
            if($query->terceros==null){
                return 'NO APLICA';
            }else{
                return $query->terceros;
            }
        })
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
        ->rawColumns(['actions','centros','tereceros_valid'])
        ->make(true);
    }


    public static function ExistenDatos(){
        $reg=planCuentas::Existe_Datos();
        return $reg; 
    }

    public static function getCentros($id){
        $reg=planCuentas::getCentros(\Hashids::decode($id)[0]);
        return json_encode(['success' => true,'data'=>$reg]);
    }
}
