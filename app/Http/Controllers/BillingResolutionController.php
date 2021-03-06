<?php

namespace App\Http\Controllers;

use App\Models\parameters\billingResolution;
use App\Models\parameters\organization;
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
        $isNew=OrganizationController::ExistenDatos();
        $hasBilling=BillingResolutionController::ExistenDatos();
        $hasAccount=BankAccountController::ExistenDatos();

        $reg=organization::Existe_Organizacion();
        if ($reg==1) {
            return view("parameters.billing.index",['isNew' => $isNew,'hasBilling'=>$hasBilling,'hasAccount'=>$hasAccount]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $isNew=OrganizationController::ExistenDatos();
        $hasBilling=BillingResolutionController::ExistenDatos();
        $hasAccount=BankAccountController::ExistenDatos();

        $reg=organization::Existe_Organizacion();
        if ($reg==1) {
            return view("parameters.billing.create",['isNew' => $isNew,'hasBilling'=>$hasBilling,'hasAccount'=>$hasAccount]);
        }
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
        $venc=date("Y-m-d",strtotime($request->fechaResolucion."+ 2 year"));
        $dias=billingResolution::DiffDaysToToday($venc);
        if ($isDuplicate) {
            return json_encode(['success' => false, 'data' => 'Ya se encuentra esta resolucion']);
        }elseif ($dias<=1) {
            return json_encode(['success' => false, 'data' => 'La fecha esta vencida']);
        }else{
            $reg = new billingResolution();
            $reg->numResolucion=$request->numResolucion;
            $reg->fechaResolucion=$request->fechaResolucion;
            $reg->desde=$request->desde;
            $reg->hasta=$request->hasta;
            $reg->activa=true;
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
        $isNew=OrganizationController::ExistenDatos();
        $hasBilling=BillingResolutionController::ExistenDatos();
        $hasAccount=BankAccountController::ExistenDatos();

        $reg=organization::Existe_Organizacion();
        if ($reg==1) {
            $billing = billingResolution::find(\Hashids::decode($id)[0]);
            return view('parameters.billing.edit', ['billing' => $billing,'isNew' => $isNew,'hasBilling'=>$hasBilling,'hasAccount'=>$hasAccount]);
        }
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
        $query = billingResolution::select('id','numResolucion','fechaResolucion','desde','hasta','activa');
        return datatables($query)
        ->addColumn('status', function ($query) {
            $venc=date("Y-m-d",strtotime($query->fechaResolucion."+ 2 year"));
            $dias=billingResolution::DiffDaysToToday($venc);
            if($dias>25){
                return '<div class="w-15 w-xs-100">
                <span class="badge badge-pill badge-info">Vigente</span>
                    </div>';
            }elseif($dias>1 && $dias<=25){
                return '<div class="w-15 w-xs-100">
                <span class="badge badge-pill badge-warning">Pronto a Vencer</span>
            </div>';
            }else{
                return '<div class="w-15 w-xs-100">
                <span class="badge badge-pill badge-danger">Vencido</span>
            </div>';
            }
        })
        ->addColumn('diasRestantes', function ($query) {
            return billingResolution::getDaysRamining($query->id);
        })
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
           
        })
        ->rawColumns(['actions','status','diasRestantes'])
        ->make(true);
    }
    public static function ExistenDatos(){
        $reg=billingResolution::Existe_Billing();
        if ($reg==0) {
            return false;
        }else{
            return true;
        }
    }
}
