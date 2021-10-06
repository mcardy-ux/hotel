<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\parameters\planCuenta_has_centros;

class planCuentas extends Model
{
    use HasFactory;

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    protected $fillable=['codigoCuenta','nombreCuenta','centroInventario','centroCosto','centroVenta','terceros','created_by','modified_by'];

    public static function getPucs(){
        $data=DB::table('plan_cuentas')
        ->select('id','codigoCuenta as value','nombreCuenta as secvalue')
        ->get();
        return $data;
    }

    public static function Existe_Datos()
    {
        $reg = planCuentas::select('id')
        ->count();
        
        if ($reg==0) {
           return false;
        }else {
           return true;
        }
    }
    public static function getCentros($id){

        $data=planCuenta_has_centros::select('centros.id as id','centros.codigo as value','centros.nombre as secvalue')
        ->leftJoin('centros','centros.id','=','planCuenta_has_centros.centro_id')
        ->where('planCuenta_has_centros.planCuenta_id','=',$id)
        ->get();
        return $data;
    
    }

    public static function getCentrosExplicitId($id){

        $data=planCuenta_has_centros::select('centro_id')
        ->where('planCuenta_id','=',$id)
        ->get();
        return $data;
    
    }
}
