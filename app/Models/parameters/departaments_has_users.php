<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departaments_has_users extends Model
{
    use HasFactory;

    public $timestamps=false;
    public $table="departaments_has_users";
}
