<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
