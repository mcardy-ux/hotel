<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_hotel extends Model
{
    use HasFactory;
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
}
