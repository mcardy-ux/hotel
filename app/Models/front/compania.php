<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compania extends Model
{
    use HasFactory;
    protected $fillable=[
        'nit',
        'digitoVerificacion',
    'razonSocial',
    'tipoRegimen',
    'ciiuActividad',
    'direccion',
    'pais',
    'ciudad',
    'telefono',
    'celular',
    'email',
    'paginaWeb',
    'tarifa',
    'forma_pago'];

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
}
