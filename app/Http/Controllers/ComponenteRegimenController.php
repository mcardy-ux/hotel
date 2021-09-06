<?php

namespace App\Http\Controllers;

use App\Models\parameters\componente_regimen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComponenteRegimenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('parameters.componente_regimen.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parameters.componente_regimen.create');
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
            'codigo' => 'bail|required|unique:componente_regimens|max:180',
            'nombre' => 'bail|required|max:180',
        ]);

        if ($validator->fails()) {
            return json_encode(['success' => false, 'data' =>$validator->errors()]);
        }

        // Retrieve the validated input...
        $validated = $validator->validated();

        componente_regimen::create($validated);
        return json_encode(['success' => true]);
    }

  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\componente_regimen  $componente_regimen
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data=componente_regimen::where('id',\Hashids::decode($id)[0])->first();
        return view("parameters.componente_regimen.edit",['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\componente_regimen  $componente_regimen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reg=componente_regimen::findOrFail(\Hashids::decode($id)[0]);
        $reg->codigo=$request->edit_codigo;
        $reg->nombre=$request->edit_nombre;
        $reg->save();
        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\componente_regimen  $componente_regimen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = componente_regimen::find(\Hashids::decode($id)[0])->delete();

        if($reg){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }

    

    public function ajaxRequestComp_regimen(){
        $query = componente_regimen::all();
        return datatables($query)
        
        ->addColumn('actions', function ($query) {
            return '<div class="dropdown d-inline-block">
                <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonUser" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="'. url('comp_regimen', [$query->encode_id,'edit']) .'">Editar</a>
                    <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
                </div>
            </div>';
        
        })
        ->rawColumns(['actions'])
        ->make(true);
    }
    public static function ExistenDatos(){
        $reg=componente_regimen::Existe_Datos();
        return $reg; 
    }
}
