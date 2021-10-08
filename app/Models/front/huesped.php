<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class huesped extends Model
{
    use HasFactory;
    protected $fillable=['numero_doc',
    'tipo_doc',
    'lugar_exp',
    'ciudad_exp',
    'fecha_nacimiento',
    'primer_nombre',
    'segundo_nombre',
    'primer_apellido',
    'segundo_apellido',
    'genero',
    'direccion',
    'nacionalidad',
    'ciudad',
    'telefono',
    'celular',
    'email',
    'tipo_huesped',
    'tarifa',
    'forma_pago',
    'rel_hotel'];

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
}
