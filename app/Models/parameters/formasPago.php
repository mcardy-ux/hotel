<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formasPago extends Model
{
    use HasFactory;
    
    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    protected $fillable=['formaPago','descripcion','estado','rel_puc','created_by','modified_by'];
}
