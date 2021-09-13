<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class temporada extends Model
{
    use HasFactory;

    public static function getTemporadaWithDays(){
        $data=DB::table('temporadas')
        ->select(DB::raw('id,inicio,fin,tipo,codigo,datediff(inicio,"2021-01-01")+1 as diasInicio,datediff(fin,"2021-01-01")+1 as diasFin'))
        ->get();
        return $data;
    }

    public static function dropTemporadaBetween($fecha){
        $data=DB::table('temporadas')
        ->select('id as reg')
        ->whereRaw('? BETWEEN date(inicio) AND date(fin)', [$fecha])
        ->get();
        if ($data!=null) {
            foreach ($data as $key ) {
                temporada::find($key->reg)->delete();
            }
        }
        
    }
}
