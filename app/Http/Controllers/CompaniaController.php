<?php

namespace App\Http\Controllers;

use App\Models\parameters\regimen;
use App\Models\parameters\formasPago;
use App\Models\parameters\location;
use App\Models\front\compania;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompaniaController extends Controller
{ /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       return view('datos.compania.index');
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
    $paises=location::getPaises();
    return view('datos.compania.create',[
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
        'nit'=>'bail|required|unique:companias|max:180',
        'digitoVerificacion' => 'bail|required|max:180',
        'razonSocial'=>'bail|required|max:180',
        'tipoRegimen'=>'bail|required|max:180',
        'ciiuActividad'=>'bail|nullable|max:180',
        'direccion' => 'bail|nullable|max:250',
        'pais' => 'bail|nullable|max:250',
        'ciudad' => 'bail|nullable|max:250',
        'telefono' => 'bail|required|max:250',
        'celular'=>'bail|nullable|max:180',
        'email' => 'bail|nullable|max:180',
        'paginaWeb' => 'bail|nullable|max:180',
        'tarifa' => 'bail|required|max:180',
        'forma_pago' => 'bail|required|max:180',
    ]);


        if ($validator->fails()) {
            return json_encode(['success' => false, 'data' =>$validator->errors()]);
        }

        // Retrieve the validated input...
        $validated = $validator->validated();
        compania::create($validated);
        return json_encode(['success' => true]);
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\compania  $compania
    * @return \Illuminate\Http\Response
    */
   public function show(compania $compania)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\compania  $compania
    * @return \Illuminate\Http\Response
    */
   public function edit( $id)
   {
    $regimenes=regimen::getRegimenes();
    $formaPago=formasPago::getFormaPago();
    $paises=location::getPaises();
    $data=compania::where('id',\Hashids::decode($id)[0])->first();
    return view('datos.compania.edit',[
        'regimenes'=>$regimenes,
        'formaPago'=>$formaPago,
        'paises'=>$paises,
        'data'=>$data
    ]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\compania  $compania
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, compania $compania)
   {
       //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\compania  $compania
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
    $reg = compania::find(\Hashids::decode($id)[0])->delete();

    if($reg){
        return json_encode(['success' => true]);
    }else{
        return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
    }
   }
   public function ajaxRequestCompanias(){
       $query = compania::all();
       
       return datatables($query) 
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
                   <a class="dropdown-item" href="'. url('compania', [$query->encode_id,'edit']) .'">Editar</a>
                   <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
               </div>
           </div>';
       
       })
           ->rawColumns(['actions','cod_tarifa'])
       ->make(true);
   }

}
