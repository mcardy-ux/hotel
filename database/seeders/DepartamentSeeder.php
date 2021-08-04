<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departament')->insert([
            'id' => 5,
            'departamento' =>'ANTIOQUIA',
            'country_id' => 1]);
            DB::table('departament')->insert([
            'id' => 8,
            'departamento' =>'ATLÁNTICO',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 11,
            'departamento' =>'BOGOTÁ, D.C.',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 13,
            'departamento' =>'BOLÍVAR',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 15,
            'departamento' =>'BOYACÁ',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 17,
            'departamento' =>'CALDAS',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 18,
            'departamento' =>'CAQUETÁ',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 19,
            'departamento' =>'CAUCA',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 20,
            'departamento' =>'CESAR',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 23,
            'departamento' =>'CÓRDOBA',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 25,
            'departamento' =>'CUNDINAMARCA',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 27,
            'departamento' =>'CHOCÓ',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 41,
            'departamento' =>'HUILA',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 44,
            'departamento' =>'LA GUAJIRA',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 47,
            'departamento' =>'MAGDALENA',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 50,
            'departamento' =>'META',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 52,
            'departamento' =>'NARIÑO',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 54,
            'departamento' =>'NORTE DE SANTANDER',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 63,
            'departamento' =>'QUINDIO',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 66,
            'departamento' =>'RISARALDA',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 68,
            'departamento' =>'SANTANDER',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 70,
            'departamento' =>'SUCRE',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 73,
            'departamento' =>'TOLIMA',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 76,
            'departamento' =>'VALLE DEL CAUCA',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 81,
            'departamento' =>'ARAUCA',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 85,
            'departamento' =>'CASANARE',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 86,
            'departamento' =>'PUTUMAYO',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 88,
            'departamento' =>'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 91,
            'departamento' =>'AMAZONAS',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 94,
            'departamento' =>'GUAINÍA',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 95,
            'departamento' =>'GUAVIARE',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 97,
            'departamento' =>'VAUPÉS',
            'country_id' => 1]);
             DB::table('departament')->insert([
            'id' => 99,
            'departamento' =>'VICHADA',
            'country_id' => 1]);
    }
}
