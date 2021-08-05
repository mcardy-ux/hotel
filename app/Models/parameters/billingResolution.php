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
}
