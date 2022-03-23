<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class huesped extends Model
{
    use HasFactory;
    protected $fillable = [
        'validacion_registro',
        'id_registro',
        'numero_doc',
        'tipo_doc',
        'lugar_exp',
        'ciudad_exp',
        'fecha_nacimiento',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'genero',
        'direccion',
        'nacionalidad',
        'ciudad',
        'telefono',
        'celular',
        'email',
        'tipo_huesped',
        'tarifa',
        'forma_pago',
        'rel_hotel'
    ];

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    public static function getPorcentajeDatosCompletados($id)
    {
        $cantidad = huesped::where('id', '=', $id)->get();
        $contador = 0;
        foreach ($cantidad as $campo) {
            if ($campo->validacion_registro == 1) {
                $campo->numero_doc == null ? $contador += 1 : false;
            }
            $campo->lugar_exp == null ? $contador += 1 : false;
            $campo->ciudad_exp == null ? $contador += 1 : false;
            $campo->segundo_nombre == null ? $contador += 1 : false;
            $campo->segundo_apellido == null ? $contador += 1 : false;
            $campo->nacionalidad == null ? $contador += 1 : false;
            $campo->ciudad == null ? $contador += 1 : false;
            $campo->celular == null ? $contador += 1 : false;
            $campo->fecha_nacimiento == null ? $contador += 1 : false;
        }
        $contador = 13 - $contador;
        $porcentaje = (($contador * 100) / 13);
        $porcentaje = round($porcentaje, 0);
        $porcentaje = number_format($porcentaje, 0);
        return $porcentaje;
    }
    public static function searchById($value, $id_hotel)
    {
        $data = DB::table('huespeds')
            ->where([
                ['numero_doc', 'like', "%{$value}%"],
                ['rel_hotel', '=', $id_hotel]
            ])
            ->get();
        return $data;
    }
    public static function searchByName($value, $id_hotel)
    {
        $data = DB::table('huespeds')
            ->where([
                [DB::raw('concat_ws(" ",`primer_nombre`,`segundo_nombre`,`primer_apellido`,`segundo_apellido`)'), 'like', "%{$value}%"],
                ['tipo_doc', '!=', null],
                ['rel_hotel', '=', $id_hotel]
            ])
            ->get();

        return $data;
    }
    public static function getFullDataJoins($id)
    {
        $documento = DB::table("huespeds")
            ->select(DB::raw('concat_ws(" ",tipo_documentos.descripcion," <br> ",numero_doc) as value'))
            ->leftJoin('tipo_documentos', 'huespeds.tipo_doc', '=', 'tipo_documentos.id')
            ->where("huespeds.id", "=", $id)->first();

        $nombre_completo = DB::table("huespeds")
            ->select(DB::raw('concat_ws(" ",primer_nombre,segundo_nombre,primer_apellido,segundo_apellido) as value'))
            ->where("huespeds.id", "=", $id)
            ->first();


        $nacionalidad = DB::table("huespeds")
            ->select('country.pais as value')
            ->leftJoin('country', 'huespeds.nacionalidad', '=', 'country.id')
            ->where("huespeds.id", "=", $id)->first();

        $ciudad = DB::table("huespeds")
            ->select('city.municipio as value')
            ->leftJoin('city', 'huespeds.ciudad', '=', 'city.id')
            ->where("huespeds.id", "=", $id)->first();

        $tipo_huesped = DB::table("huespeds")
            ->select(DB::raw('CONCAT(tipo_clientes.codigo," <br> ",tipo_clientes.descripcion) as value'))
            ->leftJoin('tipo_clientes', 'huespeds.tipo_huesped', '=', 'tipo_clientes.id')
            ->where("huespeds.id", "=", $id)->first();

        $tarifa = DB::table("huespeds")
            ->select(DB::raw('CONCAT(regimens.codigo," <br> ",regimens.descripcion) as value'))
            ->leftJoin('regimens', 'huespeds.tarifa', '=', 'regimens.id')
            ->where("huespeds.id", "=", $id)->first();

        $forma_pago = DB::table("huespeds")
            ->select(DB::raw('CONCAT(formas_pagos.formaPago," <br> ",formas_pagos.descripcion) as value'))
            ->leftJoin('formas_pagos', 'huespeds.forma_pago', '=', 'formas_pagos.id')
            ->where("huespeds.id", "=", $id)->first();

        $hotel_info = DB::table("huespeds")
            ->select('data_hotels.razonComercial', 'data_hotels.logo')
            ->leftJoin('data_hotels', 'huespeds.rel_hotel', '=', 'data_hotels.id')
            ->where("huespeds.id", "=", $id)->first();

        $NombrePlanDef = DB::table("huespeds")
            ->select(DB::raw('CONCAT(regimens.codigo," - ",regimens.descripcion) as value'))
            ->leftJoin('regimens', 'huespeds.tarifa', '=', 'regimens.id')
            ->where("huespeds.id", "=", $id)->first();

        $IdPlan = DB::table("huespeds")
            ->select('tarifa')
            ->where("id", "=", $id)->first();

        return [$documento, $nombre_completo, $nacionalidad, $ciudad, $tipo_huesped, $tarifa, $forma_pago, $hotel_info, $NombrePlanDef, $IdPlan];
        // ->rightJoin('tipo_clientes', 'huespeds.tipo_huesped', '=', 'tipo_clientes.id')->leftJoin('regimens', 'huespeds.tarifa', '=', 'regimens.id')->where("huespeds.id","=",2)->get();

    }
}
