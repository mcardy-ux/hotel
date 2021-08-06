<?php

namespace App\Http\Controllers;

use App\Models\parameters\billingResolution;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BillingResolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("parameters.billing.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("parameters.billing.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isDuplicate=billingResolution::getBillingDuplicado($request->numResolucion);
        if ($isDuplicate) {
            return json_encode(['success' => false, 'data' => 'Ya se encuentra esta resolucion']);
        }else {
            $reg = new billingResolution();
            $reg->numResolucion=$request->numResolucion;
            $reg->fechaResolucion=$request->fechaResolucion;
            $reg->desde=$request->desde;
            $reg->hasta=$request->hasta;
            $reg->created_by=$request->id_user_create;
            $reg->save();
            return json_encode(['success' => true]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parameters\billingResolution  $billingResolution
     * @return \Illuminate\Http\Response
     */
    public function show(billingResolution $billingResolution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\billingResolution  $billingResolution
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $billing = billingResolution::find(\Hashids::decode($id)[0]);
        return view('parameters.billing.edit', ['billing' => $billing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\billingResolution  $billingResolution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $reg = billingResolution::findOrFail(\Hashids::decode($id)[0]);
     
        $reg->numResolucion=$request->input('numResolucion');
        $reg->fechaResolucion=$request->input('fechaResolucion');
        $reg->desde=$request->input('desde');
        $reg->hasta=$request->input('hasta');
        $reg->modified_by=$request->input('id_user_modify');
        $reg->save();
   
        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\billingResolution  $billingResolution
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = billingResolution::find(\Hashids::decode($id)[0])->delete();
        if($reg){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }

    //Seccion de Datatables

    public function ajaxRequestBilling(){
        $query = billingResolution::select('id','numResolucion','fechaResolucion','desde','hasta');
        return datatables($query)
        ->addColumn('actions', function ($query) {
            return '<div class="dropdown d-inline-block">
                <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonBilling" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonBilling" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="'. url('billing', [$query->encode_id,'edit']) .'">Editar</a>
                    <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
                </div>
            </div>';
            //Aquí $usuario es una instancia del modelo User
            // podremos acceder a sus atributos y relaciones
            return '<p>'. $query->id.'</p>'; //mostramos el nombre del usuario
        })
        ->rawColumns(['actions'])
        ->make(true);
    }
}
