<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class agencias extends Model
{
    use HasFactory;
    protected $fillable=[
        'nit',
        'digitoVerificacion',
    'nombre',
    'direccion',
    'telefono',
    'celular',
    'email',
    'paginaWeb',
    'potencial',
    'comision',
    'aplicaCredito',
    'montoCredito',
    'diasCredito',
    'diasCorte',
    'tarifa',
    'forma_pago'];

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    public static function searchById($value){
        $data=DB::table('agencias')
        ->where('nit','like',"%{$value}%")
        ->get();
        return $data;
    }
    public static function searchByName($value){
        $data=DB::table('agencias')
        ->where('nombre','like',"%{$value}%")
        ->get();
        return $data;
    }

}
