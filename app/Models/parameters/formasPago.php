<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class formasPago extends Model
{
    use HasFactory;
    
    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    protected $fillable=['formaPago','descripcion','estado','rel_puc','created_by','modified_by'];

    public static function Existe_Datos()
    {
        $reg = formasPago::select('id')
        ->count();
        
        if ($reg==0) {
           return false;
        }else {
           return true;
        }
    }
    public static function getFormaPago(){
        $data=DB::table('formas_pagos')
        ->select('id','formaPago as value','descripcion as secvalue')
        ->where('estado','=','activo')
        ->get();
        return $data;
    }
    public static function getFormaPagoById($id){
        $data=DB::table('formas_pagos')
        ->select('formaPago as value','descripcion as secvalue')
        ->where('id','=',$id)
        ->first();
        return $data;
    }
}
