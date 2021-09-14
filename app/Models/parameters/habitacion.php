<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habitacion extends Model
{
    use HasFactory;

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    public function claseHabitaciones(){
        return $this->belongsToMany('App\Models\parameters\claseHabitaciones','habitacion_has_clases','habitacions_id','clase_hab_id');
             
    } 
    public static function getDataHabitacionFull(){
        $data=habitacion::select('habitacions.id','num_habitacion','capacidad_huespedes','estado','tipo_habitaciones.descripcion','data_hotels.id as hotel_id','data_hotels.razonComercial')
        ->leftJoin('data_hotels','data_hotels.id','=','hotel_id')
        ->leftJoin('tipo_habitaciones','tipo_habitaciones.id','=','tipo_hab_id')
        ->get();
        return $data;
    }

    
}
