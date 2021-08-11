<?php

namespace App\Http\Controllers;

use App\Models\parameters\data_hotel;
use App\Models\parameters\hotel_has_bank_accounts;
use App\Models\parameters\location;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class DataHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=data_hotel::getDataHotel();
        return view("parameters.data_hotel.index",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deptos=location::getDepartaments();
        $resoluciones=data_hotel::getResolutions();
        $cuenta_banc=data_hotel::getAccountBank();
        return view("parameters.data_hotel.create",["deptos"=>$deptos,"resoluciones"=>$resoluciones,"cuenta_banc"=>$cuenta_banc]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $reg = new data_hotel();
       $reg->razonSocial=$request->razon_social;
       $reg->razonComercial=$request->razon_comercial;
       $reg->nit=$request->nit;
       $reg->digitoVerificacion=$request->digito_nit;
       $reg->tipoRegimen=$request->regimen;
       $reg->regimenTributario=$request->tipo_regimen;
       $reg->direccion=$request->direccion;
       $reg->telefono=$request->telefono;
       $reg->telefonoAlterno=$request->telefono_alt;
       $reg->ciiuActividad=$request->ciiu;
       $reg->relUbicacion=$request->ciudad;
       $reg->relBillingResolution=$request->resolucion_facturacion;
       $reg->created_by=$request->id_user_create;
       $fileUp=$request->file('logo');
       if ($request->hasFile('logo')) {
        
            $signos = array("/", "&", "%", "!", "=", "(", ")");
            $filename = "logo_".$request->nit."_".rand();
            $filename=str_replace($signos, "_", $filename);
            $filename=str_replace(" ", "", $filename);
            \Storage::disk('logos')->put($filename,  \File::get($fileUp));
            $reg->logo=$filename;
        } 
        else {
            $registro->path_file = 'NO';
        }
       $reg->save();

        //Creacion de Cuentas Bancarias
        $bank_accounts=$request->bank_accounts;
        $array = explode(',', $bank_accounts);
        foreach($array as $bank_id){

            $hotel_cuenta_bancaria = new hotel_has_bank_accounts();
            $hotel_cuenta_bancaria->bank_account_id=$bank_id;
            $hotel_cuenta_bancaria->data_hotels_id=$reg->id;
            $hotel_cuenta_bancaria->save();
        }
    //    $reg->relBankAcc=$request->;
       return json_encode(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parameters\data_hotel  $data_hotel
     * @return \Illuminate\Http\Response
     */
    public function show(data_hotel $data_hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\data_hotel  $data_hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(data_hotel $data_hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\data_hotel  $data_hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data_hotel $data_hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\data_hotel  $data_hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(data_hotel $data_hotel)
    {
        //
    }    
    //Inicio Metodos Personalizados
    public function ajaxRequestCiiu($id)
    {  
        $data=data_hotel::getCiiu($id);
        return json_encode(['success' => true,'data'=>$data]);
    }
}
