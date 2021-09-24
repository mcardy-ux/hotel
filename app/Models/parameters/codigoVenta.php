<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class codigoVenta extends Model
{
    use HasFactory;

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
}
