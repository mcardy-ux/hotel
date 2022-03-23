<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TipoHabitaciones extends Model
{
    use HasFactory;

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    protected $fillable = ['descripcion'];

    public static function Existe_TipoHab()
    {
        $reg = TipoHabitaciones::select('id')
            ->count();

        if ($reg == 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function getTipo()
    {
        $data = DB::table('tipo_habitaciones')
            ->select('id', 'descripcion as value')
            ->get();
        return $data;
    }
    public static function getHabitacionById($id)
    {
        $data = DB::table('tipo_habitaciones')
            ->select('descripcion')
            ->where('id', '=', $id)
            ->first();
        return $data->descripcion;
    }
}
