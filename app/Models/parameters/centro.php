<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class centro extends Model
{
    use HasFactory;

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    protected $fillable=['codigo','nombre','rel_departaments','tipo','created_by','modified_by'];
    
    public static function getCentros(){
        $data=DB::table('centros')
        ->select('id','nombre as value','rel_departaments as secvalue')
        ->get();
        return $data;
    }

    public static function Existe_Datos()
    {
        $reg = centro::select('id')
        ->count();
        
        if ($reg==0) {
           return false;
        }else {
           return true;
        }
    }

    public static function getIngresos()
    {
        $reg = DB::table('centros')
        ->select('id','codigo as value','nombre as secvalue')
        ->where('tipo','=','ingreso')
        ->get();
        
        return $reg;
    }

    public static function getCosto()
    {
        $reg = DB::table('centros')
        ->select('id','codigo as value','nombre as secvalue')
        ->where('tipo','=','costo')
        ->get();
        
        return $reg;
    }
    public static function getVenta()
    {
        $reg = DB::table('centros')
        ->select('id','codigo as value','nombre as secvalue')
        ->where('tipo','=','inventario')
        ->get();
        
        return $reg;
    }
}
