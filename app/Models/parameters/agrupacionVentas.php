<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class agrupacionVentas extends Model
{
    use HasFactory;

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    protected $fillable=['descripcion','created_by','modified_by'];
   
    public static function getAgrupacion(){
        $data=DB::table('agrupacion_ventas')
        ->select('id','descripcion as value')
        ->get();
        return $data;
    }

    public static function Existe_Datos()
    {
        $reg = agrupacionVentas::select('id')
        ->count();
        
        if ($reg==0) {
           return false;
        }else {
           return true;
        }
    }
}
