<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motivoCancelacion extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'descripcion','created_by','modified_by','rangoInicial','rangoFinal'];

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
}
