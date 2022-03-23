<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class regimen_has_components extends Model
{
    use HasFactory;
    public $timestamps=false;
    public $table = 'regimen_has_components';

    public static function DropByRegimen($id){
        DB::table('regimen_has_components')->where('regimens_id', '=', $id)->delete();
    }
    
}
