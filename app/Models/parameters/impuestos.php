<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class impuestos extends Model
{
    use HasFactory;

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    protected $fillable=['nombreImpuesto','porcentaje','descripcionContable','rel_puc','created_by','modified_by'];
    
    public static function getImpuestos(){
        $data=DB::table('impuestos')
        ->select('id','nombreImpuesto as value','porcentaje as secvalue')
        ->get();
        return $data;
    }
}
