<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class temporada extends Model
{
    use HasFactory;

    public static function getTemporadaWithDays()
    {
        $data = DB::table('temporadas')
            ->select(DB::raw('id,inicio,fin,tipo,codigo,datediff(inicio,"2021-01-01")+1 as diasInicio,datediff(fin,"2021-01-01")+1 as diasFin'))
            ->get();
        return $data;
    }

    public static function dropTemporadaBetween($fecha)
    {
        $data = DB::table('temporadas')
            ->select('id as reg')
            ->whereRaw('? BETWEEN date(inicio) AND date(fin)', [$fecha])
            ->get();
        if ($data != null) {
            foreach ($data as $key) {
                temporada::find($key->reg)->delete();
            }
        }
    }

    public static function identifySeason($data)
    {
        $Arraydata = explode(",", $data);

        $fecha = $Arraydata[2] . "-" . $Arraydata[1] . "-" . $Arraydata[0];
        $Season = DB::table('temporadas')
            ->select('tipo')
            ->whereRaw('? BETWEEN inicio AND fin', [$fecha])
            ->first();
        if ($Season == null) {
            return [true, "No se ha configurado las tarifas"];
        } else {
            $Season = strtolower($Season->tipo);
            $type_room = strtolower(TipoHabitaciones::getHabitacionById($Arraydata[3]));

            $acomodacion = $Arraydata[4];
            $hotel = $Arraydata[5];

            $Tarifa = DB::table('tarifas')
                ->select('valorAlojamiento as value')
                ->where([
                    ['temporada', '=', $Season],
                    ['relClaseHabitacion', '=', $acomodacion],
                    ['tipo_habitacion', '=', $type_room],
                    ['rel_hotel', '=', $hotel]
                ])
                ->first();
            if ($Tarifa == null) {
                return [true, "No se ha configurado las tarifas"];
            } else {
                return [false, $Tarifa->value];
            }
        }
    }
}
