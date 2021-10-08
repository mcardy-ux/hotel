<?php

namespace App\Http\Controllers;

use App\Models\parameters\location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos=location::getDepartaments();
        return view("parameters.locations.index",['departamentos'=>$departamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("parameters.locations.create");
    }

    
    public function ajaxRequestCities(Request $request){
        $data = location::getListCitiesByDepartament($request->valor);
        return $data;
    }


    //Inicio Metodos Personalizados
    public function ajaxRequestDepartaments($id)
    {  
        $data=location::getListCitiesByDepartament($id);
        return json_encode(['success' => true,'data'=>$data]);
    }


    public function ajaxRequestCitiesByEstado($id){
        $data = location::getListCitiesByEstado($id);
        return $data;
    }
}
