<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
