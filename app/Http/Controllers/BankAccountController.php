<?php

namespace App\Http\Controllers;

use App\Models\parameters\bankAccount;
use App\Models\parameters\organization;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BankAccountController extends Controller
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
            return view("parameters.bank_account.index",['isNew' => $isNew,'hasBilling'=>$hasBilling,'hasAccount'=>$hasAccount]);
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
            return view("parameters.bank_account.create", ['isNew' => $isNew,'hasBilling'=>$hasBilling,'hasAccount'=>$hasAccount]);
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
        $isDuplicate=bankAccount::getBankAccountDuplicate($request->numeroCuenta);
        if ($isDuplicate) {
            return json_encode(['success' => false, 'data' => 'Ya se encuentra esta cuenta bancaria']);
        }else {
            $reg = new bankAccount();
            $reg->banco=$request->banco;
            $reg->tipoCuenta=$request->tipoCuenta;
            $reg->numeroCuenta=$request->numeroCuenta;
            $reg->titular=$request->titular;
            $reg->created_by=$request->id_user_create;
            $reg->save();
            return json_encode(['success' => true]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parameters\bankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function show(bankAccount $bankAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\bankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $isNew=OrganizationController::ExistenDatos();
        $hasBilling=BillingResolutionController::ExistenDatos();
        $hasAccount=BankAccountController::ExistenDatos();

        $reg=organization::Existe_Organizacion();
        if ($reg==1) {
            $bank_account = bankAccount::find(\Hashids::decode($id)[0]);
            return view('parameters.bank_account.edit', ['bank_account' => $bank_account,'isNew' => $isNew,'hasBilling'=>$hasBilling,'hasAccount'=>$hasAccount]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\bankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $reg = bankAccount::findOrFail(\Hashids::decode($id)[0]);
     
        $reg->banco=$request->input('banco');
        $reg->tipoCuenta=$request->input('tipoCuenta');
        $reg->numeroCuenta=$request->input('numeroCuenta');
        $reg->titular=$request->input('titular');
        $reg->modified_by=$request->input('id_user_modify');
        $reg->save();
   
        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\bankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = bankAccount::find(\Hashids::decode($id)[0])->delete();
        if($reg){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }
    public function ajaxRequestBank(){
        $query = bankAccount::select('id','banco','tipoCuenta','numeroCuenta','titular');
        return datatables($query)
        ->addColumn('actions', function ($query) {
            return '<div class="dropdown d-inline-block">
                <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonBank" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonBank" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="'. url('bank_account', [$query->encode_id,'edit']) .'">Editar</a>
                    <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
                </div>
            </div>';
           
        })
        ->rawColumns(['actions'])
        ->make(true);
    }
    public static function ExistenDatos(){
        $reg=bankAccount::Existe_Bank();
        if ($reg==0) {
            return false;
        }else{
            return true;
        }
    }
}
