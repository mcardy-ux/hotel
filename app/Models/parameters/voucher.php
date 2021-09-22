<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voucher extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'descripcion', 'consumible_POS','created_by','modified_by'];

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
}
