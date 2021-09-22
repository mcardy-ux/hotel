<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motivoViaje extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'descripcion','created_by','modified_by'];

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
}
