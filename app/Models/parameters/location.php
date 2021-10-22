<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class location extends Model
{
    use HasFactory;

    public static function getDepartaments(){
        $data=DB::table('departament')
        ->select('id','departamento as value')
        ->get();
        return $data;
    }
    public static function getListCitiesByDepartament($id){
        $data=DB::table('city')
        ->select('id','municipio as value')
        ->where('departamento_id','=',$id)
        ->get();
        return $data;
    }
    public static function getLocationByCity($id){
        $data=DB::table('city')
        ->select('id as city_id','departamento_id as departament_id')
        ->where('id','=',$id)
        ->first();
        return $data;
    }
    public static function getPaises(){
        $data=DB::table('country')
        ->select('id','pais as value')
        ->get();
        return $data;
    }
    public static function getListCitiesByEstado($id){
        $data=DB::table('city')
        ->select('id','municipio as value')
        ->where('estado','=',$id)
        ->get();
        return $data;
    }
    public static function getPaisById($id){
        $data=DB::table('country')
        ->select('pais')
        ->where('id','=',$id)
        ->first();
        return $data;
    }
    public static function getLugar($pais,$ciudad){
        if(isset($pais,$ciudad)){
            $pais=DB::table('country')
            ->select('pais as valuePais')
            ->where('id','=',$pais)
            ->first();
            $ciudad=DB::table('city')
            ->select('municipio as valueCiudad')
            ->where('id','=',$ciudad)
            ->first();
            $data=$ciudad->valueCiudad." - ".$pais->valuePais;
            return $data;
        }
        return null;
       
    } 
}
