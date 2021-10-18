<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_hotel extends Model
{
    use HasFactory;

    public function departament(){
        return $this->hasMany(departament::class);
    }
    public static function getHotels(){
        $data=DB::table('data_hotels')
        ->select('id','razonComercial as value')
        ->get();
        return $data;
    }
    public static function getRazonByID($id){
        $data=DB::table('data_hotels')
        ->select('razonComercial as value')
        ->where('id','=',$id)
        ->first();
        return $data;
    }
    public static function getResolutions(){
        $data=DB::table('billing_resolutions')
        ->select('id','numResolucion as value','fechaResolucion as secvalue')
        ->where('activa',1)
        ->get();
        return $data;
    }
    public static function getAccountBank(){
        $data=DB::table('bank_accounts')
        ->select('id','banco as value','numeroCuenta as secvalue')
        ->get();
        return $data;
    }
    public static function getCiiu($condicion){
        
        if ($condicion==1) {
            $data=DB::table('ciiu')
            ->select('codigo as id','codigo as value', "descripcion as secvalue")
            ->where('codigo','<=',500)
            ->get();
            return $data;
        }
        if ($condicion==2) {
            $data=DB::table('ciiu')
            ->select('codigo as id','codigo as value', "descripcion as secvalue")
            ->where([['codigo','>',500],['codigo','<=',1000]])

            ->get();
            return $data;
        }
        if ($condicion==3) {
            $data=DB::table('ciiu')
            ->select('codigo as id','codigo as value', "descripcion as secvalue")
            ->where([['codigo','>',1000],['codigo','<=',2000]])
            ->get();
            return $data;
        }
        if ($condicion==4) {
            $data=DB::table('ciiu')
            ->select('codigo as id','codigo as value', "descripcion as secvalue")
            ->where([['codigo','>',2000],['codigo','<=',3000]])
            ->get();
            return $data;
        }
        if ($condicion==5) {
            $data=DB::table('ciiu')
            ->select('codigo as id','codigo as value', "descripcion as secvalue")
            ->where([['codigo','>',3000],['codigo','<=',4000]])
            ->get();
            return $data;
        }
        if ($condicion==6) {
            $data=DB::table('ciiu')
            ->select('codigo as id','codigo as value', "descripcion as secvalue")
            ->where([['codigo','>',4000],['codigo','<=',5000]])
            ->get();
            return $data;
        }
        if ($condicion==7) {
            $data=DB::table('ciiu')
            ->select('codigo as id','codigo as value', "descripcion as secvalue")
            ->where([['codigo','>',5000],['codigo','<=',6000]])
            ->get();
            return $data;
        }
        if ($condicion==8) {
            $data=DB::table('ciiu')
            ->select('codigo as id','codigo as value', "descripcion as secvalue")
            ->where([['codigo','>',6000],['codigo','<=',7000]])
            ->get();
            return $data;
        }
        if ($condicion==9) {
            $data=DB::table('ciiu')
            ->select('codigo as id','codigo as value', "descripcion as secvalue")
            ->where([['codigo','>',7000],['codigo','<=',8000]])
            ->get();
            return $data;
        }
        if ($condicion==10) {
            $data=DB::table('ciiu')
            ->select('codigo as id','codigo as value', "descripcion as secvalue")
            ->where([['codigo','>',8000],['codigo','<=',10000]])
            ->get();
            return $data;
        }

        
    }
    public static function getCiiuWithId($condicion){
        if ($condicion<=500) {
            return ['data'=>$condicion,'id_categoria'=>1];
        }
        if ($condicion>500 && $condicion<=1000) {
            
            return ['data'=>$condicion,'id_categoria'=>2];
        }
        if ($condicion>1000 && $condicion<=2000) {
            
            return ['data'=>$condicion,'id_categoria'=>3];
        }
        if ($condicion>2000 && $condicion<=3000) {
            
            return ['data'=>$condicion,'id_categoria'=>4];
        }
        if ($condicion>3000 && $condicion<=4000) {
            
            return ['data'=>$condicion,'id_categoria'=>5];
        }
        if ($condicion>4000 && $condicion<=5000) {
            
            return ['data'=>$condicion,'id_categoria'=>6];
        }
        if ($condicion>5000 && $condicion<=6000) {
            
            return ['data'=>$condicion,'id_categoria'=>7];
        }
        if ($condicion>6000 && $condicion<=7000) {
            
            return ['data'=>$condicion,'id_categoria'=>8];
        }
        if ($condicion>7000 && $condicion<=8000) {
            
            return ['data'=>$condicion,'id_categoria'=>9];
        }
        if ($condicion>8000 && $condicion<=10000) {
            
            return ['data'=>$condicion,'id_categoria'=>10];
        }
    }

    public static function getDataHotel(){
        $data=DB::table('data_hotels')
        ->select('id','razonComercial','tipoRegimen','regimenTributario','direccion','telefono','telefonoAlterno','ciiuActividad','rnt','logo','relUbicacion')
        ->get();
        
        return $data;
    }

    //Relacion de muchos a muchos

    public function bankAccount()
    {
        return $this->belongsToMany(bankAccount::class,'hotel_has_bank_accounts');
    }

    public static function HasHotel()
    {
        $reg = DB::table('data_hotels')
        ->select('id')
        ->count();
        
        if ($reg==0) {
           return false;
        }else {
           return true;
        }
    }

    public static function CountHotel()
    {
        $reg = DB::table('data_hotels')
        ->select('id')
        ->count();
        
        return $reg;
    }
}
