<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\parameters\componente_regimen;
use App\Models\parameters\regimen_has_components;
use Illuminate\Support\Facades\DB;
class regimen extends Model
{
    use HasFactory;

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }

    public static function getRegimenes(){
        $data=DB::table('regimens')
        ->select('id','codigo as value','descripcion as secvalue')
        ->get();
        return $data;
    }
    public static function getRegimenesById($id){
        $data=DB::table('regimens')
        ->select('descripcion as value')
        ->where('id','=',$id)
        ->first();
        return $data;
    }
    public static function getComponentsByRegimen($id){
        $data=componente_regimen::select('componente_regimens.id as id','componente_regimens.codigo as value','componente_regimens.nombre as secvalue')
        ->leftJoin('regimen_has_components','regimen_has_components.component_id','=','componente_regimens.id')
        ->where('regimen_has_components.regimens_id','=',$id)
        ->get();
        return $data;
    }

    public static function getComponentsByRegimenArray($id){
        $contador=regimen_has_components::select('component_id')->where('regimens_id','=',$id)->count();
        $data=regimen_has_components::select('component_id as item')->where('regimens_id','=',$id)->get();
        $component=array();
        for ($i=0; $i < $contador; $i++) { 
                $data_compon=$data[$i]->item;
                array_push($component,$data_compon);
        }
        return $component;

    }
    public static function Existe_Datos()
    {
        $reg = regimen::select('id')
        ->count();
        
        if ($reg==0) {
           return false;
        }else {
           return true;
        }
    }

    public static function searchByCode($value){
        $data=DB::table('regimens')
        ->where('codigo','like',"%{$value}%")
        ->get();
        return $data;
    }
    public static function searchByDesc($value){
        $data=DB::table('regimens')
        ->where('descripcion','like',"%{$value}%")
        ->get();
        return $data;
    }


}
