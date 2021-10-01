<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class centro extends Model
{
    use HasFactory;

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    protected $fillable=['nombre','departamento','PUC_Costo','PUC_Gasto','tipo','rel_puc','created_by','modified_by'];
    
    public static function getCentros(){
        $data=DB::table('centros')
        ->select('id','nombre as value','rel_departaments as secvalue')
        ->get();
        return $data;
    }

    public static function Existe_Datos()
    {
        $reg = centro::select('id')
        ->count();
        
        if ($reg==0) {
           return false;
        }else {
           return true;
        }
    }

}
