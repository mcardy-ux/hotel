<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class componente_regimen extends Model
{
    use HasFactory;
     
    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    
        protected $fillable=['codigo','nombre'];

    
        public static function Existe_Datos()
    {
        $reg = componente_regimen::select('id')
        ->count();
        
        if ($reg==0) {
           return false;
        }else {
           return true;
        }
    }

    public static function getcomponentes(){
        $data=DB::table('componente_regimens')
        ->select('id','codigo as value','nombre as secvalue')
        ->get();
        return $data;
    }
}
