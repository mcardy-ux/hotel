<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habitacion_has_clases extends Model
{
    use HasFactory;
    public $timestamps=false;
    public $table = 'habitacion_has_clases';
    protected $fillable = ['habitacions_id', 'clase_hab_id'];


}
