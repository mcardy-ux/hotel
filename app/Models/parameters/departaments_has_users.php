<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class departaments_has_users extends Model
{
    use HasFactory;

    public $timestamps=false;
    public $table="departaments_has_users";

    public static function DropDepartamentsByUser($id){
        $reg = DB::table('departaments_has_users')->where('user_id', '=', $id)->delete();
        if($reg){
            return true;
        }else{
            return false;
        }
    }
    public static function GetDepartamentsByUser($id){
        $data = departaments_has_users::select('departament_id as id')
        ->where('user_id', '=', $id)
        ->get();
        return $data;
    }
    public static function GetIntegrantesByDpto($id){
        $data = departaments_has_users::select('user_id as id','users.name')
        ->leftJoin('users','users.id','=','departaments_has_users.user_id')
        ->where('departament_id', '=', $id)
        ->get();
        return $data;
    }
}
