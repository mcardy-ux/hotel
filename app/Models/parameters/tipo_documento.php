<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class tipo_documento extends Model
{
    use HasFactory;

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    protected $fillable=['codigo','descripcion','created_by','modified_by'];

    public static function getTipoDocumentos(){
        $data=DB::table('tipo_documentos')
        ->select('id','codigo as value','descripcion as secvalue')
        ->get();
        return $data;
    }
}
