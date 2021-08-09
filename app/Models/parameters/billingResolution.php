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
    public static function getDaysRamining($num){
        $reg = DB::table('billing_resolutions')->select('fechaResolucion')->where('id','=',$num)->first();
        $venc=date("Y-m-d",strtotime($reg->fechaResolucion."+ 2 year"));
        $actual=date("Y-m-d");
        $dateDifference=abs(strtotime($venc) - strtotime($actual));

        $years  = floor($dateDifference / (365 * 60 * 60 * 24));
        $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days       = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));
        if ($years>0) {
            return "<span class='badge badge-light mb-1'>".$years." año,  ".$months." Meses y ".$days." dias </span>";
        }elseif ($months>0) {
            return "<span class='badge badge-light mb-1'>".$months." Meses y ".$days." dias </span>";
        }else{
            if ($days<20) {
                return "<span class='badge badge-danger mb-1'>".$days." dias </span>";
            }else {
                return "<span class='badge badge-light mb-1'>".$days." dias </span>";
            } 
        }
        
    }
}
