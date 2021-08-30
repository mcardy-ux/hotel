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
        $data=User::find(\Hashids::decode($id)[0]);
        return view("parameters.user.edit",['data'=>$data]);
        
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
        $user=User::find(\Hashids::decode($id)[0]);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->status=$request->acceso;
        $user->save();

        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = User::find(\Hashids::decode($id)[0])->delete();
        if($reg){
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
}
