<?php

namespace App\Http\Controllers;

use App\Models\front\agencias;
use App\Models\parameters\regimen;
use App\Models\parameters\formasPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AgenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datos.agencia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regimenes=regimen::getRegimenes();
        $formaPago=formasPago::getFormaPago();
        return view('datos.agencia.create',[
            'regimenes'=>$regimenes,
            'formaPago'=>$formaPago,
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
            'nit'=>'bail|required|unique:agencias|max:180',
            'digitoVerificacion' => 'bail|required|max:180',
            'nombre'=>'bail|required|max:180',
            'direccion' => 'bail|nullable|max:250',
            'telefono' => 'bail|required|max:250',
            'celular'=>'bail|nullable|max:180',
            'email' => 'bail|nullable|max:180',
            'paginaWeb' => 'bail|nullable|max:180',

            'potencial' => 'bail|nullable',
            'comision' => 'bail|nullable',
            'aplicaCredito' => 'bail|nullable',
            'montoCredito' => 'bail|nullable',
            'diasCredito' => 'bail|nullable',
            'diasCorte' => 'bail|nullable',


            'tarifa' => 'bail|required|max:180',
            'forma_pago' => 'bail|required|max:180',
        ]);
    
    
            if ($validator->fails()) {
                return json_encode(['success' => false, 'data' =>$validator->errors()]);
            }
    
            // Retrieve the validated input...
            $validated = $validator->validated();
            agencias::create($validated);
            return json_encode(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\front\agencias  $agencias
     * @return \Illuminate\Http\Response
     */
    public function show(agencias $agencias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\front\agencias  $agencias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regimenes=regimen::getRegimenes();
        $formaPago=formasPago::getFormaPago();
        $data=agencias::where('id',\Hashids::decode($id)[0])->first();
        return view('datos.agencia.edit',[
            'regimenes'=>$regimenes,
            'formaPago'=>$formaPago,
            'data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\front\agencias  $agencias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    $reg=agencias::findOrFail(\Hashids::decode($id)[0]);
       $reg->nit=$request->edit_nit;
       $reg->digitoVerificacion=$request->edit_digitoVerificacion;
       $reg->nombre=$request->edit_nombre;
       $reg->direccion=$request->edit_direccion;
       $reg->telefono=$request->edit_telefono;
       $reg->celular=$request->edit_celular;
       $reg->email=$request->edit_email;
       $reg->paginaWeb=$request->edit_paginaWeb;
       $reg->potencial=$request->edit_potencial;
       $reg->comision=$request->edit_comision;
       $aplica=$request->edit_aplicaCredito;
       if ($aplica==true) {
        $reg->aplicaCredito=1;
       }
       

       $reg->montoCredito=$request->edit_montoCredito;
       $reg->diasCredito=$request->edit_diasCredito;
       $reg->diasCorte=$request->edit_diasCorte;
       $reg->tarifa=$request->edit_tarifa;
       $reg->forma_pago=$request->edit_forma_pago;

       $reg->save();
       return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\front\agencias  $agencias
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $reg = agencias::find(\Hashids::decode($id)[0])->delete();

        if($reg){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }
    public function ajaxRequestAgencias(){
        $query = agencias::all();
        return datatables($query)
        ->addColumn('nit_completo', function ($query) {
         return $query->nit."-".$query->digitoVerificacion;
        })
        ->addColumn('cod_tarifa', function ($query) {
            $reg=regimen::getRegimenesById($query->tarifa);
         return $reg->value;
        })
        ->addColumn('actions', function ($query) {
            return '<div class="dropdown d-inline-block">
                <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonUser" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="'. url('agencias', [$query->encode_id,'edit']) .'">Editar</a>
                    <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
                </div>
            </div>';
        
        })
            ->rawColumns(['actions','cod_tarifa','nit_completo'])
        ->make(true);
    }
}
