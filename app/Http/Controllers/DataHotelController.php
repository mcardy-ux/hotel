<?php

namespace App\Http\Controllers;

use App\Models\parameters\data_hotel;
use App\Models\parameters\hotel_has_bank_accounts;
use App\Models\parameters\billingResolution;
use App\Models\parameters\organization;
use App\Models\parameters\bankAccount;
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
        $has_hotel=data_hotel::HasHotel();
        $billing=billingResolution::all()->where("activa",1)->count();
        $is_Ind=organization::select('Is_independiente')->first();
        $banks=bankAccount::all()->count();
        if ($billing>=1 && $banks >=1) {
            $data=data_hotel::getDataHotel();
            return view("parameters.data_hotel.index",['data'=>$data,'has_hotel' => $has_hotel,'is_Ind' =>$is_Ind]);
        }
        else{
            return redirect()->back()->withErrors('No se ha parametrizado los campos necesarios.')->withInput();

        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $is_Ind=organization::select('Is_independiente')->first();
        $has_hotel=data_hotel::HasHotel();
        if ($is_Ind->Is_independiente==0) {
            $deptos=location::getDepartaments();
            $resoluciones=data_hotel::getResolutions();
            $cuenta_banc=data_hotel::getAccountBank();
            return view("parameters.data_hotel.create",["deptos"=>$deptos,"resoluciones"=>$resoluciones,"cuenta_banc"=>$cuenta_banc]);
        }elseif ($is_Ind->Is_independiente==1 && $has_hotel ==false) {
            $deptos=location::getDepartaments();
            $resoluciones=data_hotel::getResolutions();
            $cuenta_banc=data_hotel::getAccountBank();
            return view("parameters.data_hotel.create",["deptos"=>$deptos,"resoluciones"=>$resoluciones,"cuenta_banc"=>$cuenta_banc]);
        }else {
            return redirect()->back();
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
        $organization=organization::select('id')->first();
        
       $reg = new data_hotel();
       $reg->razonComercial=$request->razon_comercial;
       $reg->tipoRegimen=$request->regimen;
       $reg->regimenTributario=$request->tipo_regimen;
       $reg->direccion=$request->direccion;
       $reg->telefono=$request->telefono;
       $reg->telefonoAlterno=$request->telefono_alt;
       $reg->ciiuActividad=$request->ciiu;
       $reg->relUbicacion=$request->ciudad;
       $reg->relBillingResolution=$request->resolucion_facturacion;
       $reg->rnt=$request->rnt;
       $reg->created_by=$request->id_user_create;
       $reg->relOrganizacion=$organization->id;
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
            $reg->path_file = 'NO';
        }
       $reg->save();

        //Creacion de Cuentas Bancarias
        $bank_accounts=$request->bank_accounts;
        $array = explode(',', $bank_accounts);
        foreach($array as $bank_id){

            $hotel_cuenta_bancaria = new hotel_has_bank_accounts();
            $hotel_cuenta_bancaria->bank_account_id=$bank_id;
            $hotel_cuenta_bancaria->data_hotel_id=$reg->id;
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
    public function edit($id)
    {
        $isNew=OrganizationController::ExistenDatos();
        $hasBilling=BillingResolutionController::ExistenDatos();
        $hasAccount=BankAccountController::ExistenDatos();
        $data=data_hotel::where('id',$id)->first();
        $ciiu=data_hotel::getCiiuWithId($data->ciiuActividad);
        $deptos=location::getDepartaments();
        $location=location::getLocationByCity($data->relUbicacion);
        $resoluciones=data_hotel::getResolutions();
        $cuenta_banc=data_hotel::getAccountBank();
        $cant_banks=count($data->bankAccount);
        $account=array();

        for ($i=0; $i < $cant_banks; $i++) { 
            
            if($cant_banks==1){
                $data_reg=$data->bankAccount[$i]->pivot->bank_account_id;
                array_push($account,$data_reg);
            }elseif($cant_banks>1){
                $data_reg=$data->bankAccount[$i]->pivot->bank_account_id;
                array_push($account,$data_reg);
            }
        }
        
           
            return view("parameters.data_hotel.edit",['data'=>$data,'ciiu'=>$ciiu,'banke'=>$data->bankAccount,"deptos"=>$deptos,"resoluciones"=>$resoluciones,"cuenta_banc"=>$cuenta_banc,"cuentas_selec"=>$account,"location"=>$location]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\data_hotel  $data_hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reg = data_hotel::findOrFail($id);
        
        $reg->razonComercial=$request->data[2]['value'];
        $reg->direccion=$request->data[3]['value'];
        $reg->tipoRegimen=$request->data[4]['value'];
        $reg->regimenTributario=$request->data[5]['value'];
        $reg->telefono=$request->data[6]['value'];
        $reg->telefonoAlterno=$request->data[7]['value'];
        $reg->ciiuActividad=$request->data[14]['value'];
        $reg->modified_by=$request->data[1]['value'];
        $reg->relUbicacion=$request->data[10]['value'];
        $reg->relBillingResolution=$request->data[11]['value'];
        $reg->rnt=$request->data[12]['value'];
        //Edicion de Cuentas Bancarias
        $EliminarCuentas=hotel_has_bank_accounts::DropByHotel($id);
        if ($EliminarCuentas) {
            foreach($request->array as $bank_id){

                $hotel_cuenta_bancaria = new hotel_has_bank_accounts();
                $hotel_cuenta_bancaria->bank_account_id=$bank_id;
                $hotel_cuenta_bancaria->data_hotel_id=$id;
                $hotel_cuenta_bancaria->save();
            }
            $reg->save();
            return json_encode(['success' => true]);
        }
        return json_encode(['success' => false]);
       
    }

   
    //Inicio Metodos Personalizados
    public function ajaxRequestCiiu($id)
    {  
        $data=data_hotel::getCiiu($id);
        return json_encode(['success' => true,'data'=>$data]);
    }

    public static function ExistenDatos(){
        $reg=data_hotel::HasHotel();
        return $reg;
    }
}
