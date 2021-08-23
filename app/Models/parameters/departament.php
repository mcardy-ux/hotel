<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departament extends Model
{
    use HasFactory;

    public function data_hotel(){
        return $this->belongsTo(data_hotel::class, 'rel_hotel');
    }
}
