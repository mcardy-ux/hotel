<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class planCuenta_has_centros extends Model
{
    use HasFactory;
    public $timestamps=false;
    public $table = 'planCuenta_has_centros';

    public static function DropByPlan($id){
        $reg = DB::table('planCuenta_has_centros')->where('planCuenta_id', '=', $id)->delete();
        if($reg){
            return true;
        }else{
            return false;
        }
    }
}
