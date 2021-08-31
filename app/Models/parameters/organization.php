<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    use HasFactory;
    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    public static function Existe_Organizacion(){
        $reg=organization::all()->count();
        return $reg;
    }
}
