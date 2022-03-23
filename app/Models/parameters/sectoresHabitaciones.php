<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class sectoresHabitaciones extends Model
{
    use HasFactory;
    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }

    protected $fillable = ['descripcion', 'hotel_id'];

    public static function Existe_Datos()
    {
        $reg = sectoresHabitaciones::select('id')
            ->count();

        if ($reg == 0) {
            return false;
        } else {
            return true;
        }
    }
    public static function getSectores()
    {
        $data = sectoresHabitaciones::select('id', 'descripcion as value', 'hotel_id as secvalue')
            ->get();
        return $data;
    }
}
