<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class location extends Model
{
    use HasFactory;

    public static function getDepartaments(){
        $data=DB::table('departament')
        ->select('id','departamento')
        ->get();
        return $data;
    }
    public static function getListCitiesByDepartament($id){
        $data=DB::table('city')
        ->select('id','municipio')
        ->where('departamento_id','=',$id)
        ->get();
        return $data;
    }
}
