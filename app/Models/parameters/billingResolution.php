<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class billingResolution extends Model
{
    use HasFactory;

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }

    public static function getBillingDuplicado($num){
        $reg = DB::table('billing_resolutions')
        ->select('id')
        ->where('numResolucion','=',$num)
        ->count();
        
        if ($reg>0) {
           return true;
        }else {
           return false;
        }
    }
    public static function DiffDaysToToday($vencimiento){
        $actual=date("Y-m-d");
        $fecha1 = date_create($vencimiento);
        $fecha2 = date_create($actual);
        $dias = date_diff($fecha2,$fecha1)->format('%R%a');
        return $dias;
    }
    public static function getDaysRamining($num){
        $reg = DB::table('billing_resolutions')->select('fechaResolucion')->where('id','=',$num)->first();
        
        $venc=date("Y-m-d",strtotime($reg->fechaResolucion."+ 2 year"));
        
        $dias=billingResolution::DiffDaysToToday($venc);
         if ($dias>25) {
            return "<span class='badge badge-light mb-1'>".($dias+0)." días restantes </span>";
        }elseif($dias>1 && $dias<=25){
            return "<span class='badge badge-warning mb-1'>".($dias+0)." días pronto a vencer </span>";
        }elseif($dias<=1){
            return "<span class='badge badge-danger mb-1'>".($dias+0)." días vencidos </span>";
        }  
    }
}
