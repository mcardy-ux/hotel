<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
}
