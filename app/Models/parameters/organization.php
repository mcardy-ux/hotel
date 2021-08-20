<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    use HasFactory;
    public static function Existe_Organizacion(){
        $reg=organization::all()->count();
        return $reg;
    }
}
