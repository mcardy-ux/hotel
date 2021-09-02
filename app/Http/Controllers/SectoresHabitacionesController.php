<?php

namespace App\Http\Controllers;

use App\Models\parameters\sectoresHabitaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SectoresHabitacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("parameters.sectoresHab.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("parameters.sectoresHab.create");
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
            'descripcion' => 'bail|required|unique:sectores_habitaciones|max:150',
        ]);

        if ($validator->fails()) {
            return json_encode(['success' => false, 'data' =>$validator->errors()]);
        }

        // Retrieve the validated input...
        $validated = $validator->validated();

        sectoresHabitaciones::create($validated);
        return json_encode(['success' => true]);


        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\sectoresHabitaciones  $sectoresHabitaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=sectoresHabitaciones::where('id',\Hashids::decode($id)[0])->first();
        return view("parameters.sectoresHab.edit",['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\sectoresHabitaciones  $sectoresHabitaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reg=sectoresHabitaciones::findOrFail(\Hashids::decode($id)[0]);
        $reg->descripcion=$request->edit_descripcion;
        $reg->save();
        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\sectoresHabitaciones  $sectoresHabitaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = sectoresHabitaciones::find(\Hashids::decode($id)[0])->delete();

        if($reg){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }
 
    //Seccion de Datatables

    public function ajaxRequestSectores(){
        $query = sectoresHabitaciones::all();
        return datatables($query)
        
        ->addColumn('actions', function ($query) {
            return '<div class="dropdown d-inline-block">
                <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonUser" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="'. url('sectoresHab', [$query->encode_id,'edit']) .'">Editar</a>
                    <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
                </div>
            </div>';
        
        })
        ->rawColumns(['actions'])
        ->make(true);
    }


}
