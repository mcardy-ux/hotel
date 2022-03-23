<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tarifa extends Model
{
    use HasFactory;

    public static function Existe_Tarifas(){
        $reg = tarifa::select('id')
        ->count();
        
        if ($reg==0) {
           return false;
        }else {
           return true;
        }
    }
    public static function drop(){
        DB::table('tarifas')->truncate();
    }
}
