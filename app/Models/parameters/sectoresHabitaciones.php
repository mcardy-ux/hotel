<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class sectoresHabitaciones extends Model
{
    use HasFactory;
    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    
        protected $fillable=['descripcion'];

        public static function Existe_Datos()
    {
        $reg = sectoresHabitaciones::select('id')
        ->count();
        
        if ($reg==0) {
           return false;
        }else {
           return true;
        }
    }
    public static function getSectores(){
        $data=DB::table('sectores_habitaciones')
        ->select('id','descripcion as value')
        ->get();
        return $data;
    }

    
}
