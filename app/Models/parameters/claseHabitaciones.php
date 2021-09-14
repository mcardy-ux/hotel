<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\parameters\habitacion;
use App\Models\parameters\habitacion_has_clases;

class claseHabitaciones extends Model
{
    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    protected $fillable=['descripcion'];

    public static function Existe_Datos()
    {
        $reg = claseHabitaciones::select('id')
        ->count();
        
        if ($reg==0) {
           return false;
        }else {
           return true;
        }
    }


    public static function getClases(){
        $data=DB::table('clase_habitaciones')
        ->select('id','descripcion as value')
        ->get();
        return $data;
    }
    public function habitacion(){
        return $this->belongsToMany('App\Models\parameters\habitacion','habitacion_has_clases')
             ->withPivot('habitacions_id'); 
    } 


}
