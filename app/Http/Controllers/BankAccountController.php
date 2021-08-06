<?php

namespace App\Http\Controllers;

use App\Models\parameters\bankAccount;
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
        return view("parameters.bank_account.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("parameters.bank_account.create");
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
    public function edit(bankAccount $bankAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\bankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
       
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
    
}
