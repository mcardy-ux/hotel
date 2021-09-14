<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class habitacion_has_clases extends Model
{
    use HasFactory;
    public $timestamps=false;
    public $table = 'habitacion_has_clases';
    protected $fillable = ['habitacions_id', 'clase_hab_id'];

    public static function getClassesByHabitacion($id){
        $data=habitacion_has_clases::select('clase_hab_id as id')
        ->where('habitacions_id','=',$id)
        ->get();

        $clases=array();
        foreach ($data as $key ) {
            array_push($clases,$key->id);
        }     
        return $clases;
    }
        public static function DropByHabitacion($id){
        $reg = DB::table('habitacion_has_clases')->where('habitacions_id', '=', $id)->delete();
        if($reg){
            return true;
        }else{
            return false;
        }
    }
    
    

}
