<?php

namespace App\Http\Controllers;

use App\Models\parameters\departament;
use Illuminate\Http\Request;

class DepartamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("parameters.departaments.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=departament::getDataUsersActive();
        $hotels=departament::getHotels();
        return view("parameters.departaments.create",['users'=>$users,'hotels'=>$hotels]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reg=new departament();
        $reg->nombre=$request->nombre;
        $reg->responsable=$request->responsable;
        $reg->email_responsable=$request->email;
        $reg->rel_hotel=$request->hotel;
        $reg->created_by=$request->id_user_create;
        $reg->save();
        return json_encode(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parameters\departament  $departament
     * @return \Illuminate\Http\Response
     */
    public function show(departament $departament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\departament  $departament
     * @return \Illuminate\Http\Response
     */
    public function edit(departament $departament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\departament  $departament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, departament $departament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\departament  $departament
     * @return \Illuminate\Http\Response
     */
    public function destroy(departament $departament)
    {
        //
    }
    public function ajaxRequestDepto(){
        $query = departament::select('id','nombre','responsable','email_responsable');
        return datatables($query)
        ->addColumn('actions', function ($query) {
            return '<div class="dropdown d-inline-block">
                <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonBilling" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonBilling" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="'. url('departament', [$query->encode_id,'edit']) .'">Editar</a>
                    <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
                </div>
            </div>';
           
        })
        ->rawColumns(['actions','status','diasRestantes'])
        ->make(true);
    }
    //Inicio Metodos Personalizados
    public function ajaxRequestDptos($id)
    {  
        $data=departament::getEmail($id);
        return json_encode(['success' => true,'data'=>$data]);
    }
}
