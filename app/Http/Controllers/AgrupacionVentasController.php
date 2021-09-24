<?php

namespace App\Http\Controllers;

use App\Models\parameters\agrupacionVentas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AgrupacionVentasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("parameters.agrupacionVentas.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("parameters.agrupacionVentas.create");
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
            'descripcion' => 'bail|required|max:190',
            'descripcion' => 'bail|required|max:190',
        ]);

        if ($validator->fails()) {
            return json_encode(['success' => false, 'data' =>$validator->errors()]);
        }

        // Retrieve the validated input...
        $validated = $validator->validated();

        agrupacionVentas::create($validated);
        return json_encode(['success' => true]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\agrupacionVentas  $agrupacionVentas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=agrupacionVentas::where('id',\Hashids::decode($id)[0])->first();
        return view("parameters.agrupacionVentas.edit",['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\agrupacionVentas  $agrupacionVentas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reg=agrupacionVentas::findOrFail(\Hashids::decode($id)[0]);
        $reg->descripcion=$request->edit_descripcion;
        $reg->save();
        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\agrupacionVentas  $agrupacionVentas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = agrupacionVentas::find(\Hashids::decode($id)[0])->delete();

        if($reg){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }
 
    //Seccion de Datatables

    public function ajaxRequestagrupacionVentas(){
        $query = agrupacionVentas::all();
        return datatables($query)
        
        ->addColumn('actions', function ($query) {
            return '<div class="dropdown d-inline-block">
                <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonUser" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="'. url('agrupacionVentas', [$query->encode_id,'edit']) .'">Editar</a>
                    <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
                </div>
            </div>';
        
        })
        ->rawColumns(['actions'])
        ->make(true);
    }

    public static function ExistenDatos(){
        $reg=agrupacionVentas::Existe_Datos();
        return $reg; 
    }
}
