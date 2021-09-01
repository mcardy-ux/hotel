<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\parameters\departaments_has_users;
use App\Models\parameters\departament;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("parameters.user.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deptos=departament::getDepartamentsWithHotel();
        return view("parameters.user.create",['deptos'=>$deptos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => $request->acceso,
        ]);


        //Creacion de Cuentas Bancarias
        $user_hasDeptos=$request->deptos_sel;
        $array = explode(',', $user_hasDeptos);
        foreach($array as $depto_id){

            $user_has_depto = new departaments_has_users();
            $user_has_depto->departament_id=$depto_id;
            $user_has_depto->user_id=$user->id;
            $user_has_depto->save();
        }

        return json_encode(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deptos=departament::getDepartamentsWithHotel();
        $data=User::find(\Hashids::decode($id)[0]);
        
        $deptos_sel=departaments_has_users::GetDepartamentsByUser(\Hashids::decode($id)[0]);
        $cant_dptos=count($deptos_sel);
        $deptos_sel_final=array();
        for ($i=0; $i < $cant_dptos; $i++) { 
            $data_reg=$deptos_sel[$i]->id;
            array_push($deptos_sel_final,$data_reg);
        }
        return view("parameters.user.edit",['data'=>$data,'deptos'=>$deptos,'deptos_sel'=>$deptos_sel_final]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id=\Hashids::decode($id)[0];
        $user=User::find($id);
        $user->name=$request->data[0]['value'];
        $user->email=$request->data[1]['value'];
        $user->password=Hash::make($request->data[2]['value']);
        $user->status=$request->data[3]['value'];

        $EliminarDeptos=departaments_has_users::DropDepartamentsByUser($id);
        if ($EliminarDeptos) {
            foreach($request->array as $depto_id){
                $departaments_users = new departaments_has_users();
                $departaments_users->departament_id=$depto_id;
                $departaments_users->user_id=$id;
                $departaments_users->save();
            }
            $user->save();
            return json_encode(['success' => true]);
        }

        return json_encode(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dependencias=departaments_has_users::DropDepartamentsByUser(\Hashids::decode($id)[0]);
        $reg = User::find(\Hashids::decode($id)[0])->delete();
        if($reg && $dependencias){
            return json_encode(['success' => true]);
        }else{
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }

    //Seccion de Datatables

    public function ajaxRequestUser(){
        $query = User::all();
        return datatables($query)
        ->addColumn('acceso', function ($query) {
            if($query->status==1){
                return '<span class="badge badge-pill badge-success mb-1">Activo</span>';
            }else{
                return '<span class="badge badge-pill badge-warning mb-1">Inactivo</span>';
            }
        })
        ->addColumn('rol', function ($query) {
            return '<span class="badge badge-pill badge-outline-info mb-1">Usuario</span>';
        })
        ->addColumn('actions', function ($query) {
            return '<div class="dropdown d-inline-block">
                <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonUser" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="'. url('user', [$query->encode_id,'edit']) .'">Editar</a>
                    <a class="dropdown-item" onclick="show(this)" id="'.$query->encode_id.'">Eliminar</a>
                </div>
            </div>';
           
        })
        ->rawColumns(['acceso','rol','actions'])
        ->make(true);
    }

    public static function ExistenDatos(){
        $reg=User::Existe_Users();
        return $reg; 
    }
}
