<?php

namespace App\Http\Controllers;

use App\Models\parameters\organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
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
        if($reg==1){
            $data=organization::all();
            return view('parameters.organization.index',['data'=>$data,'isNew' => $isNew,'hasBilling'=>$hasBilling,'hasAccount'=>$hasAccount]);
        }elseif($reg==0){
            return view("parameters.organization.create");
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
        if($reg==1){
            return redirect()->route("organization.index");
        }elseif($reg==0){
            return view("parameters.organization.create",['isNew' => $isNew,'hasBilling'=>$hasBilling,'hasAccount'=>$hasAccount]);
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
        $reg=organization::Existe_Organizacion();
        if($reg==1){
            return json_encode(['success' => false,'data'=>'Ya existe una configuracion.']);
        }elseif($reg==0){
           
            $organization=new organization();
            $organization->razonSocial=$request->razon_social;
            $organization->nit=$request->nit;
            $organization->digitoVerificacion=$request->digito_nit;
            $organization->direccion_contacto=$request->direccion_contacto;
            $organization->telefono_contacto=$request->telefono_contacto;
            $organization->email_contacto=$request->email_contacto;
            $fileUp=$request->file('logo');
            if ($request->hasFile('logo')) {
            
                $signos = array("/", "&", "%", "!", "=", "(", ")");
                $filename = "logo_Org_".$request->nit."_".rand();
                $filename=str_replace($signos, "_", $filename);
                $filename=str_replace(" ", "", $filename);
                \Storage::disk('logos')->put($filename,  \File::get($fileUp));
                $organization->logo=$filename;
            } 
            else {
                $organization->logo = 'NO';
            }

            $organization->Is_independiente=$request->_type_org;
            $organization->save();
            return json_encode(['success' => true]);
        }
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $org=organization::findOrFail(\Hashids::decode($id)[0])->get();
        return view("parameters.organization.edit",['org'=>$org]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $org=organization::findOrFail(\Hashids::decode($id)[0]);
        $org->razonSocial=$request->edit_razon_social;
        $org->nit=$request->edit_nit;
        $org->digitoVerificacion=$request->edit_digito_nit;
        $org->direccion_contacto=$request->edit_direccion_contacto;
        $org->telefono_contacto=$request->edit_telefono_contacto;
        $org->email_contacto=$request->edit_email_contacto;

        $stat=$org->save();
        if($stat){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede editar, Recargue por favor la pagina.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(organization $organization)
    {
        //
    }
    public static function ExistenDatos(){
        $reg=organization::Existe_Organizacion();
        if ($reg==1) {
            return true;
        }else{
            return false;
        }
    }

}
