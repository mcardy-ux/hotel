<?php

namespace App\Http\Controllers;

use App\Models\parameters\regimen;
use App\Models\parameters\componente_regimen;
use App\Models\parameters\regimen_has_components;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegimenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regimens=regimen::all();
        return view('parameters.regimens.index',['regimens'=>$regimens]);
    }

    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $components=componente_regimen::getcomponentes();
        return view('parameters.regimens.create',['components'=>$components]);
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
            'codigo' => 'bail|required|unique:regimens|max:150',
            'descripcion' => 'bail|required|max:200',
            'id_user_create' => 'bail|required',
        ]);

        if ($validator->fails()) {
            return json_encode(['success' => false, 'data' =>$validator->errors()]);
        }

        $reg = new regimen();
        $reg->codigo=$request->codigo;
        $reg->descripcion=$request->descripcion;
        $reg->created_by=$request->id_user_create;
        $reg->save();

        $components=$request->array_component_reg;
        $array = explode(',', $components);
        foreach($array as $component_id){

            $regimen_componente= new regimen_has_components();
            $regimen_componente->component_id=$component_id;
            $regimen_componente->regimens_id=$reg->id;
            $regimen_componente->save();
        }
        
       return json_encode(['success' => true]);


    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\regimen  $regimen
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        
        $data=regimen::findOrFail(\Hashids::decode($id)[0]);
        
        $componentsOfRegimen=regimen::getComponentsByRegimenArray(\Hashids::decode($id)[0]);
        $components=componente_regimen::getcomponentes();

        return view('parameters.regimens.edit',['data'=>$data,'componentsOfRegimen'=>$componentsOfRegimen,'components'=>$components]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\regimen  $regimen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $idNew=\Hashids::decode($id)[0];
        $reg=regimen::find($idNew);
        $reg->codigo=$request->data[2]['value'];
        $reg->descripcion=$request->data[3]['value'];
        $reg->modified_by=$request->data[1]['value'];
       
        regimen_has_components::DropByRegimen($idNew);
        
            foreach($request->array as $component_id){

                $componentRegimen = new regimen_has_components();
                $componentRegimen->component_id=$component_id;
                $componentRegimen->regimens_id=$idNew;
                $componentRegimen->save();
            }
            $reg->save();
            return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\regimen  $regimen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $componentsHasRegimen = regimen_has_components::where('regimens_id','=',\Hashids::decode($id)[0])->delete();
        $reg = regimen::find(\Hashids::decode($id)[0])->delete();
        

        if($reg && $componentsHasRegimen){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }

    public  function ajaxRequestComponents($id){
        $data=regimen::getComponentsByRegimen($id);
        return json_encode(['success' => true,'data'=>$data]);
    }

    public static function ExistenDatos(){
        $reg=regimen::Existe_Datos();
        return $reg; 
    }
}
