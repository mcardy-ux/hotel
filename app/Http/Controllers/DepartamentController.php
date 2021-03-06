<?php

namespace App\Http\Controllers;

use App\Models\parameters\departament;
use App\Models\parameters\data_hotel;
use App\Models\parameters\departaments_has_users;
use App\Models\User;
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
        $hotels=data_hotel::select('id','razonComercial','logo')->get();
        $deptos=departament::getDeptosWithUsers();
        return view("parameters.departaments.index",['hotels'=>$hotels,'deptos'=>$deptos]);
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
        $reg->rel_hotel=$request->hotel;
        $reg->created_by=$request->id_user_create;
        $reg->save();
        return json_encode(['success' => true]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parameters\departament  $departament
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=departament::findOrFail(\Hashids::decode($id)[0]);
        $users=departament::getDataUsersActive();
        $hotels=departament::getHotels();
        return view("parameters.departaments.edit",['users'=>$users,'hotels'=>$hotels,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parameters\departament  $departament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $depto=departament::findOrFail($id);
        $depto->nombre=$request->edit_nombre;
        $depto->rel_hotel=$request->edit_hotel;
        $depto->modified_by=$request->id_user_modify;
        $stat=$depto->save();
        if($stat){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede editar, Recargue por favor la pagina.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parameters\departament  $departament
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $reg = departament::find(\Hashids::decode($id)[0])->delete();

        if($reg){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }
    // public function ajaxRequestDepto(){
    //     $query = departament::select('id','nombre','responsable','email_responsable','rel_hotel');
    //     return datatables($query)
    //     ->addColumn('actions', function ($query) {
    //         return '<div class="dropdown d-inline-block">
    //             <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonBilling" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    //                 Opciones
    //             </button>
    //             <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonBilling" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
    //                 <a class="dropdown-item" href="'. url('departament', [$query->encode_id,'edit']) .'">Editar</a>
    //                 <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
    //             </div>
    //         </div>';
           
    //     })
    //     ->addColumn('nombre_responsable', function ($query) {
    //         $user=User::select('name')->where('id',$query->responsable)->first();
    //         return $user->name;
    //     })
    //     ->addColumn('hotel', function ($query) {
    //         $bank=data_hotel::select('razonComercial')->where('id',$query->rel_hotel)->first();
    //         return $bank->razonComercial;
    //     })
    //     ->rawColumns(['actions','nombre_responsable','hotel'])
    //     ->make(true);
    // }
    //Inicio Metodos Personalizados
    public function ajaxRequestDptos($id)
    {  
        $data=departament::getEmail($id);
        return json_encode(['success' => true,'data'=>$data]);
    }
    public function ajaxRequestDptosByHotel($hotel)
    {  
        $data=departament::getByHotel($hotel);
        return json_encode(['success' => true,'data'=>$data]);
    }
    public function ajaxRequestIntegrantes($id)
    {  
        $data=departaments_has_users::GetIntegrantesByDpto($id);
        return json_encode(['success' => true,'data'=>$data]);
    }
    public static function ExistenDatos(){
        $reg=departament::Existe_Dptos();
        return $reg;
    }
}
