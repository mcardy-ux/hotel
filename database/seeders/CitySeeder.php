<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('city')->insert([
                'id' => 1,
                'municipio' => 'Abriaquí',
                'estado' =>1,
                'departamento_id' =>5]);

            DB::table('city')->insert([
                'id' => 2,
                'municipio' => 'Acacías',
                'estado' =>1,
                'departamento_id' =>50]);

            DB::table('city')->insert([
                'id' => 3,
                'municipio' => 'Acandí',
                'estado' =>1,
                'departamento_id' =>27]);

            DB::table('city')->insert([
                'id' => 4,
                'municipio' => 'Acevedo',
                'estado' =>1,
                'departamento_id' =>41]);

            DB::table('city')->insert([
                'id' => 5,
                'municipio' => 'Achí',
                'estado' =>1,
                'departamento_id' =>13]);

            DB::table('city')->insert([
                'id' => 6,
                'municipio' => 'Agrado',
                'estado' =>1,
                'departamento_id' =>41]);

            DB::table('city')->insert([
                'id' => 7,
                'municipio' => 'Agua de Dios',
                'estado' =>1,
                'departamento_id' =>25]);

            DB::table('city')->insert([
                'id' => 8,
                'municipio' => 'Aguachica',
                'estado' =>1,
                'departamento_id' =>20]);

            DB::table('city')->insert([
                'id' => 9,
                'municipio' => 'Aguada',
                'estado' =>1,
                'departamento_id' =>68]);

            DB::table('city')->insert([
                'id' => 10,
                'municipio' => 'Aguadas',
                'estado' =>1,
                'departamento_id' =>17]);

            DB::table('city')->insert([
                'id' => 11,
                'municipio' => 'Aguazul',
                'estado' =>1,
                'departamento_id' =>85]);

            DB::table('city')->insert([
                'id' => 12,
                'municipio' => 'Agustín Codazzi',
                'estado' =>1,
                'departamento_id' =>20]);

            DB::table('city')->insert([
                'id' => 13,
                'municipio' => 'Aipe',
                'estado' =>1,
                'departamento_id' =>41]);

            DB::table('city')->insert([
                'id' => 14,
                'municipio' => 'Albania',
                'estado' =>1,
                'departamento_id' =>18]);

            DB::table('city')->insert([
                'id' => 15,
                'municipio' => 'Albania',
                'estado' =>1,
                'departamento_id' =>44]);

            DB::table('city')->insert([
                'id' => 16,
                'municipio' => 'Albania',
                'estado' =>1,
                'departamento_id' =>68]);

            DB::table('city')->insert([
                'id' => 17,
                'municipio' => 'Albán',
                'estado' =>1,
                'departamento_id' =>25]);

            DB::table('city')->insert([
                'id' => 18,
                'municipio' => 'Albán (San José)',
                'estado' =>1,
                'departamento_id' =>52]);

            DB::table('city')->insert([
                'id' => 19,
                'municipio' => 'Alcalá',
                'estado' =>1,
                'departamento_id' =>76]);

            DB::table('city')->insert([
                'id' => 20,
                'municipio' => 'Alejandria',
                'estado' =>1,
                'departamento_id' =>5]);

            DB::table('city')->insert([
                'id' => 21,
                'municipio' => 'Algarrobo',
                'estado' =>1,
                'departamento_id' =>47]);

            DB::table('city')->insert([
                'id' => 22,
                'municipio' => 'Algeciras',
                'estado' =>1,
                'departamento_id' =>41]);

            DB::table('city')->insert([
                'id' => 23,
                'municipio' => 'Almaguer',
                'estado' =>1,
                'departamento_id' =>19]);

            DB::table('city')->insert([
                'id' => 24,
                'municipio' => 'Almeida',
                'estado' =>1,
                'departamento_id' =>15]);

            DB::table('city')->insert([
                'id' => 25,
                'municipio' => 'Alpujarra',
                'estado' =>1,
                'departamento_id' =>73]);

            DB::table('city')->insert([
                'id' => 26,
                'municipio' => 'Altamira',
                'estado' =>1,
                'departamento_id' =>41]);

            DB::table('city')->insert([
                'id' => 27,
                'municipio' => 'Alto Baudó (Pie de Pato)',
                'estado' =>1,
                'departamento_id' =>27]);




            DB::table('city')->insert([
                'id' => 28,
                'municipio' => 'Altos del Rosario',
                'estado' => 1,
                'departamento_id'=>13]);
            DB::table('city')->insert([
                'id' => 29,
                'municipio' => 'Alvarado',
                'estado' => 1,
                'departamento_id'=>73]);
            DB::table('city')->insert([
                'id' => 30,
                'municipio' => 'Amagá',
                'estado' => 1,
                'departamento_id'=>5]);
            DB::table('city')->insert([
                'id' => 31,
                'municipio' => 'Amalfi',
                'estado' => 1,
                'departamento_id'=>5]);
            DB::table('city')->insert([
                'id' => 32,
                'municipio' => 'Ambalema',
                'estado' => 1,
                'departamento_id'=>73]);
            DB::table('city')->insert([
                'id' => 33,
                'municipio' => 'Anapoima',
                'estado' => 1,
                'departamento_id'=>25]);
            DB::table('city')->insert([
                'id' => 34,
                'municipio' => 'Ancuya',
                'estado' => 1,
                'departamento_id'=>52]);
            DB::table('city')->insert([
                'id' => 35,
                'municipio' => 'Andalucía',
                'estado' => 1,
                'departamento_id'=>76]);
            DB::table('city')->insert([
                'id' => 36,
                'municipio' => 'Andes',
                'estado' => 1,
                'departamento_id'=>5]);
            DB::table('city')->insert([
                'id' => 37,
                'municipio' => 'Angelópolis',
                'estado' => 1,
                'departamento_id'=>5]);
            DB::table('city')->insert([
                'id' => 38,
                'municipio' => 'Angostura',
                'estado' => 1,
                'departamento_id'=>5]);
            DB::table('city')->insert([
                'id' => 39,
                'municipio' => 'Anolaima',
                'estado' => 1,
                'departamento_id'=>25]);
            DB::table('city')->insert([
                'id' => 40,
                'municipio' => 'Anorí',
                'estado' => 1,
                'departamento_id'=>5]);
            DB::table('city')->insert([
                'id' => 41,
                'municipio' => 'Anserma',
                'estado' => 1,
                'departamento_id'=>17]);
            DB::table('city')->insert([
                'id' => 42,
                'municipio' => 'Ansermanuevo',
                'estado' => 1,
                'departamento_id'=>76]);
            DB::table('city')->insert([
                'id' => 43,
                'municipio' => 'Anzoátegui',
                'estado' => 1,
                'departamento_id'=>73]);
            DB::table('city')->insert([
                'id' => 44,
                'municipio' => 'Anzá',
                'estado' => 1,
                'departamento_id'=>5]);
            DB::table('city')->insert([
                'id' => 45,
                'municipio' => 'Apartadó',
                'estado' => 1,
                'departamento_id'=>5]);
            DB::table('city')->insert([
                'id' => 46,
                'municipio' => 'Apulo',
                'estado' => 1,
                'departamento_id'=>25]);
            DB::table('city')->insert([
                'id' => 47,
                'municipio' => 'Apía',
                'estado' => 1,
                'departamento_id'=>66]);
            DB::table('city')->insert([
                'id' => 48,
                'municipio' => 'Aquitania',
                'estado' => 1,
                'departamento_id'=>15]);
            DB::table('city')->insert([
                'id' => 49,
                'municipio' => 'Aracataca',
                'estado' => 1,
                'departamento_id'=>47]);
            DB::table('city')->insert([
                'id' => 50,
                'municipio' => 'Aranzazu',
                'estado' => 1,
                'departamento_id'=>17]);
            DB::table('city')->insert([
                'id' => 51,
                'municipio' => 'Aratoca',
                'estado' => 1,
                'departamento_id'=>68]);
            DB::table('city')->insert([
                'id' => 52,
                'municipio' => 'Arauca',
                'estado' => 1,
                'departamento_id'=>81]);
            DB::table('city')->insert([
                'id' => 53,
                'municipio' => 'Arauquita',
                'estado' => 1,
                'departamento_id'=>81]);
            DB::table('city')->insert([
                'id' => 54,
                'municipio' => 'Arbeláez',
                'estado' => 1,
                'departamento_id'=>25]);
            DB::table('city')->insert([
                'id' => 55,
                'municipio' => 'Arboleda (Berruecos)',
                'estado' => 1,
                'departamento_id'=>52]);
            DB::table('city')->insert([
                'id' => 56,
                'municipio' => 'Arboledas',
                'estado' => 1,
                'departamento_id'=>54]);
            DB::table('city')->insert([
                'id' => 57,
                'municipio' => 'Arboletes',
                'estado' => 1,
                'departamento_id'=>5]);
            DB::table('city')->insert([
                'id' => 58,
                'municipio' => 'Arcabuco',
                'estado' => 1,
                'departamento_id'=>15]);
            DB::table('city')->insert([
                'id' => 59,
                'municipio' => 'Arenal',
                'estado' => 1,
                'departamento_id'=>13]);
            DB::table('city')->insert([
                'id' => 60,
                'municipio' => 'Argelia',
                'estado' => 1,
                'departamento_id'=>5]);


            DB::table('city')->insert([
                'id' => 61, 'municipio' => 'Argelia','estado' => 1, 'departamento_id' => 19]);
            DB::table('city')->insert([
                'id' => 62, 'municipio' => 'Argelia','estado' => 1, 'departamento_id' => 76]);
            DB::table('city')->insert([
                'id' => 63, 'municipio' => 'Ariguaní (El Difícil)','estado' => 1, 'departamento_id' => 47]);
            DB::table('city')->insert([
                'id' => 64, 'municipio' => 'Arjona','estado' => 1, 'departamento_id' => 13]);
            DB::table('city')->insert([
                'id' => 65, 'municipio' => 'Armenia','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert([
                'id' => 66, 'municipio' => 'Armenia','estado' => 1, 'departamento_id' => 63]);
            DB::table('city')->insert([
                'id' => 67, 'municipio' => 'Armero (Guayabal)','estado' => 1, 'departamento_id' => 73]);
            DB::table('city')->insert([
                'id' => 68, 'municipio' => 'Arroyohondo','estado' => 1, 'departamento_id' => 13]);
            DB::table('city')->insert([
                'id' => 69, 'municipio' => 'Astrea','estado' => 1, 'departamento_id' => 20]);
            DB::table('city')->insert([
                'id' => 70, 'municipio' => 'Ataco','estado' => 1, 'departamento_id' => 73]);
            DB::table('city')->insert([
                'id' => 71, 'municipio' => 'Atrato (Yuto)','estado' => 1, 'departamento_id' => 27]);
            DB::table('city')->insert([
                'id' => 72, 'municipio' => 'Ayapel','estado' => 1, 'departamento_id' => 23]);
            DB::table('city')->insert([
                'id' => 73, 'municipio' => 'Bagadó','estado' => 1, 'departamento_id' => 27]);
            DB::table('city')->insert([
                'id' => 74, 'municipio' => 'Bahía Solano (Mútis)','estado' => 1, 'departamento_id' => 27]);
            DB::table('city')->insert([
                'id' => 75, 'municipio' => 'Bajo Baudó (Pizarro)','estado' => 1, 'departamento_id' => 27]);
            DB::table('city')->insert([
                'id' => 76, 'municipio' => 'Balboa','estado' => 1, 'departamento_id' => 19]);
            DB::table('city')->insert([
                'id' => 77, 'municipio' => 'Balboa','estado' => 1, 'departamento_id' => 66]);
            DB::table('city')->insert([
                'id' => 78, 'municipio' => 'Baranoa','estado' => 1, 'departamento_id' => 8]);
            DB::table('city')->insert([
                'id' => 79, 'municipio' => 'Baraya','estado' => 1, 'departamento_id' => 41]);
            DB::table('city')->insert([
                'id' => 80, 'municipio' => 'Barbacoas','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert([
                'id' => 81, 'municipio' => 'Barbosa','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert([
                'id' => 82, 'municipio' => 'Barbosa','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert([
                'id' => 83, 'municipio' => 'Barichara','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert([
                'id' => 84, 'municipio' => 'Barranca de Upía','estado' => 1, 'departamento_id' => 50]);
            DB::table('city')->insert([
                'id' => 85, 'municipio' => 'Barrancabermeja','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert([
                'id' => 86, 'municipio' => 'Barrancas','estado' => 1, 'departamento_id' => 44]);
            DB::table('city')->insert([
                'id' => 87, 'municipio' => 'Barranco de Loba','estado' => 1, 'departamento_id' => 13]);
            DB::table('city')->insert([
                'id' => 88, 'municipio' => 'Barranquilla','estado' => 1, 'departamento_id' => 8]);
            DB::table('city')->insert([
                'id' => 89, 'municipio' => 'Becerríl','estado' => 1, 'departamento_id' => 20]);
            DB::table('city')->insert([
                'id' => 90, 'municipio' => 'Belalcázar','estado' => 1, 'departamento_id' => 17]);
            DB::table('city')->insert([
                'id' => 91, 'municipio' => 'Bello','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert([
                'id' => 92, 'municipio' => 'Belmira','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert([
                'id' => 93, 'municipio' => 'Beltrán','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert([
                'id' => 94, 'municipio' => 'Belén','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert([
                'id' => 95, 'municipio' => 'Belén','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert([
                'id' => 96, 'municipio' => 'Belén de Bajirá','estado' => 1, 'departamento_id' => 27]);
            DB::table('city')->insert([
                'id' => 97, 'municipio' => 'Belén de Umbría','estado' => 1, 'departamento_id' => 66]);
            DB::table('city')->insert([
                'id' => 98, 'municipio' => 'Belén de los Andaquíes','estado' => 1, 'departamento_id' => 18]);
            DB::table('city')->insert([
                'id' => 99, 'municipio' => 'Berbeo','estado' => 1, 'departamento_id' => 15]);
            
            
            DB::table('city')->insert(['id' => 100, 'municipio' => 'Betania', 'estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' => 101, 'municipio' => 'Beteitiva', 'estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' => 102, 'municipio' => 'Betulia', 'estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' => 103, 'municipio' => 'Betulia', 'estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' => 104, 'municipio' => 'Bituima', 'estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' => 105, 'municipio' => 'Boavita', 'estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' => 106, 'municipio' => 'Bochalema', 'estado' => 1, 'departamento_id' => 54]);
            DB::table('city')->insert(['id' => 107, 'municipio' => 'Bogotá D.C.', 'estado' => 1, 'departamento_id' => 11]);
            DB::table('city')->insert(['id' => 108, 'municipio' => 'Bojacá', 'estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' => 109, 'municipio' => 'Bojayá (Bellavista)', 'estado' => 1, 'departamento_id' => 27]);
            DB::table('city')->insert(['id' => 110, 'municipio' => 'Bolívar', 'estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' => 111, 'municipio' => 'Bolívar', 'estado' => 1, 'departamento_id' => 19]);
            DB::table('city')->insert(['id' => 112, 'municipio' => 'Bolívar', 'estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' => 113, 'municipio' => 'Bolívar', 'estado' => 1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' => 114, 'municipio' => 'Bosconia', 'estado' => 1, 'departamento_id' => 20]);
            DB::table('city')->insert(['id' => 115, 'municipio' => 'Boyacá', 'estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' => 116, 'municipio' => 'Briceño', 'estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' => 117, 'municipio' => 'Briceño', 'estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>118,'municipio' =>'Bucaramanga','estado' =>1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>119,'municipio' =>'Bucarasica','estado' =>1, 'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>120,'municipio' =>'Buenaventura','estado' =>1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>121,'municipio' =>'Buenavista','estado' =>1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>122,'municipio' =>'Buenavista','estado' =>1, 'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>123,'municipio' =>'Buenavista','estado' =>1, 'departamento_id' => 63]);
            DB::table('city')->insert(['id' =>124,'municipio' =>'Buenavista','estado' =>1, 'departamento_id' => 70]);
            DB::table('city')->insert(['id' =>125,'municipio' =>'Buenos Aires','estado' =>1, 'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>126,'municipio' =>'Buesaco','estado' =>1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>127,'municipio' =>'Buga','estado' =>1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>128,'municipio' =>'Bugalagrande','estado' =>1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>129,'municipio' =>'Burítica','estado' =>1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>130,'municipio' =>'Busbanza','estado' =>1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>131,'municipio' =>'Cabrera','estado' =>1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>132,'municipio' =>'Cabrera','estado' =>1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>133,'municipio' =>'Cabuyaro','estado' =>1, 'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>134,'municipio' =>'Cachipay','estado' =>1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>135,'municipio' =>'Caicedo','estado' =>1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>136,'municipio' =>'Caicedonia','estado' =>1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>137,'municipio' =>'Caimito','estado' =>1, 'departamento_id' => 70]);
            DB::table('city')->insert(['id' =>138,'municipio' =>'Cajamarca','estado' =>1, 'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>139,'municipio' =>'Cajibío','estado' =>1, 'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>140,'municipio' =>'Cajicá','estado' =>1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>141,'municipio' =>'Calamar','estado' =>1, 'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>142,'municipio' =>'Calamar','estado' =>1, 'departamento_id' => 95]);
            DB::table('city')->insert(['id' =>143,'municipio' =>'Calarcá','estado' =>1, 'departamento_id' => 63]);
            DB::table('city')->insert(['id' =>144,'municipio' =>'Caldas','estado' =>1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>145,'municipio' =>'Caldas','estado' =>1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>146,'municipio' =>'Caldono','estado' =>1, 'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>147,'municipio' =>'California','estado' =>1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>148,'municipio' =>'Calima (Darién)','estado' =>1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>149,'municipio' =>'Caloto','estado' =>1, 'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>150,'municipio' =>'Calí','estado' =>1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>151,'municipio' =>'Campamento','estado' =>1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>152,'municipio' =>'Campo de la Cruz','estado' =>1, 'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>153,'municipio' =>'Campoalegre','estado' =>1, 'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>154,'municipio' =>'Campohermoso','estado' =>1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>155,'municipio' =>'Canalete','estado' =>1, 'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>156,'municipio' =>'Candelaria','estado' =>1, 'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>157,'municipio' =>'Candelaria','estado' =>1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>158,'municipio' =>'Cantagallo','estado' =>1, 'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>159,'municipio' =>'Cantón de San Pablo','estado' =>1, 'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>160,'municipio' =>'Caparrapí','estado' =>1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>161,'municipio' => 'Capitanejo', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>162,'municipio' => 'Caracolí', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>163,'municipio' => 'Caramanta', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>164,'municipio' => 'Carcasí', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>165,'municipio' => 'Carepa', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>166,'municipio' => 'Carmen de Apicalá', 'estado' => 1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>167,'municipio' => 'Carmen de Carupa', 'estado' => 1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>168,'municipio' => 'Carmen de Viboral', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>169,'municipio' => 'Carmen del Darién (CURBARADÓ)', 'estado' => 1,'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>170,'municipio' => 'Carolina', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>171,'municipio' => 'Cartagena', 'estado' => 1,'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>172,'municipio' => 'Cartagena del Chairá', 'estado' => 1,'departamento_id' => 18]);
            DB::table('city')->insert(['id' =>173,'municipio' => 'Cartago', 'estado' => 1,'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>174,'municipio' => 'Carurú', 'estado' => 1,'departamento_id' => 97]);
            DB::table('city')->insert(['id' =>175,'municipio' => 'Casabianca', 'estado' => 1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>176,'municipio' => 'Castilla la Nueva', 'estado' => 1,'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>177,'municipio' => 'Caucasia', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>178,'municipio' => 'Cañasgordas', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>179,'municipio' => 'Cepita', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>180,'municipio' => 'Cereté', 'estado' => 1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>181,'municipio' => 'Cerinza', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>182,'municipio' => 'Cerrito', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>183,'municipio' => 'Cerro San Antonio', 'estado' => 1,'departamento_id' => 47]);
            DB::table('city')->insert(['id' =>184,'municipio' => 'Chachaguí', 'estado' => 1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>185,'municipio' => 'Chaguaní', 'estado' => 1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>186,'municipio' => 'Chalán', 'estado' => 1,'departamento_id' => 70]);
            DB::table('city')->insert(['id' =>187,'municipio' => 'Chaparral', 'estado' => 1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>188,'municipio' => 'Charalá', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>189,'municipio' => 'Charta', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>190,'municipio' => 'Chigorodó', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>191,'municipio' => 'Chima', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>192,'municipio' => 'Chimichagua', 'estado' => 1,'departamento_id' => 20]);
            DB::table('city')->insert(['id' =>193,'municipio' => 'Chimá', 'estado' => 1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>194,'municipio' => 'Chinavita', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>195,'municipio' => 'Chinchiná', 'estado' => 1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>196,'municipio' => 'Chinácota', 'estado' => 1,'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>197,'municipio' => 'Chinú', 'estado' => 1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>198,'municipio' => 'Chipaque', 'estado' => 1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>199,'municipio' => 'Chipatá', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>200,'municipio' => 'Chiquinquirá', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>201,'municipio' => 'Chiriguaná', 'estado' => 1,'departamento_id' => 20]);
            DB::table('city')->insert(['id' =>202,'municipio' => 'Chiscas', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>203,'municipio' => 'Chita', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>204, 'municipio' => 'Chitagá','estado' => 1, 'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>205, 'municipio' => 'Chitaraque','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>206, 'municipio' => 'Chivatá','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>207, 'municipio' => 'Chivolo','estado' => 1, 'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>208, 'municipio' => 'Choachí','estado' => 1, 'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>209, 'municipio' => 'Chocontá','estado' => 1, 'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>210, 'municipio' => 'Chámeza','estado' => 1, 'departamento_id' =>85]);
            DB::table('city')->insert(['id' =>211, 'municipio' => 'Chía','estado' => 1, 'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>212, 'municipio' => 'Chíquiza','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>213, 'municipio' => 'Chívor','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>214, 'municipio' => 'Cicuco','estado' => 1, 'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>215, 'municipio' => 'Cimitarra','estado' => 1, 'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>216, 'municipio' => 'Circasia','estado' => 1, 'departamento_id' =>63]);
            DB::table('city')->insert(['id' =>217, 'municipio' => 'Cisneros','estado' => 1, 'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>218, 'municipio' => 'Ciénaga','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>219, 'municipio' => 'Ciénaga','estado' => 1, 'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>220, 'municipio' => 'Ciénaga de Oro','estado' => 1, 'departamento_id' =>23]);
            DB::table('city')->insert(['id' =>221, 'municipio' => 'Clemencia','estado' => 1, 'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>222, 'municipio' => 'Cocorná','estado' => 1, 'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>223, 'municipio' => 'Coello','estado' => 1, 'departamento_id' =>73]);
            DB::table('city')->insert(['id' =>224, 'municipio' => 'Cogua','estado' => 1, 'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>225, 'municipio' => 'Colombia','estado' => 1, 'departamento_id' =>41]);
            DB::table('city')->insert(['id' =>226, 'municipio' => 'Colosó (Ricaurte)','estado' => 1, 'departamento_id' =>70]);
            DB::table('city')->insert(['id' =>227, 'municipio' => 'Colón','estado' => 1, 'departamento_id' =>86]);
            DB::table('city')->insert(['id' =>228, 'municipio' => 'Colón (Génova)','estado' => 1, 'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>229, 'municipio' => 'Concepción','estado' => 1, 'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>230, 'municipio' => 'Concepción','estado' => 1, 'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>231, 'municipio' => 'Concordia','estado' => 1, 'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>232, 'municipio' => 'Concordia','estado' => 1, 'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>233, 'municipio' => 'Condoto','estado' => 1, 'departamento_id' =>27]);
            DB::table('city')->insert(['id' =>234, 'municipio' => 'Confines','estado' => 1, 'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>235, 'municipio' => 'Consaca','estado' => 1, 'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>236, 'municipio' => 'Contadero','estado' => 1, 'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>237, 'municipio' => 'Contratación','estado' => 1, 'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>238, 'municipio' => 'Convención','estado' => 1, 'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>239, 'municipio' => 'Copacabana','estado' => 1, 'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>240, 'municipio' => 'Coper','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>241, 'municipio' => 'Cordobá','estado' => 1, 'departamento_id' =>63]);
            DB::table('city')->insert(['id' =>242, 'municipio' => 'Corinto','estado' => 1, 'departamento_id' =>19]);
            DB::table('city')->insert(['id' =>243, 'municipio' => 'Coromoro','estado' => 1, 'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>244, 'municipio' => 'Corozal','estado' => 1, 'departamento_id' =>70]);
            DB::table('city')->insert(['id' =>245, 'municipio' => 'Corrales','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>246, 'municipio' => 'Cota','estado' => 1, 'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>247, 'municipio' => 'Cotorra','estado' => 1, 'departamento_id' =>23]);
            DB::table('city')->insert(['id' =>248, 'municipio' => 'Covarachía','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>249, 'municipio' => 'Coveñas','estado' => 1, 'departamento_id' =>70]);
            DB::table('city')->insert(['id' =>250, 'municipio' => 'Coyaima','estado' => 1, 'departamento_id' =>73]);
            DB::table('city')->insert(['id' =>251, 'municipio' => 'Cravo Norte','estado' => 1, 'departamento_id' =>81]);
            DB::table('city')->insert(['id' =>252, 'municipio' => 'Cuaspud (Carlosama)','estado' => 1, 'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>253, 'municipio' => 'Cubarral','estado' => 1, 'departamento_id' =>50]);
            DB::table('city')->insert(['id' =>254, 'municipio' => 'Cubará','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>255, 'municipio' => 'Cucaita','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>256, 'municipio' => 'Cucunubá','estado' => 1, 'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>257, 'municipio' => 'Cucutilla','estado' => 1, 'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>258, 'municipio' => 'Cuitiva','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>259, 'municipio' => 'Cumaral','estado' => 1, 'departamento_id' =>50]);
            DB::table('city')->insert(['id' =>260, 'municipio' => 'Cumaribo','estado' => 1, 'departamento_id' =>99]);
            DB::table('city')->insert(['id' =>261, 'municipio' => 'Cumbal','estado' => 1, 'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>262, 'municipio' => 'Cumbitara','estado' => 1, 'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>263, 'municipio' => 'Cunday','estado' => 1, 'departamento_id' =>73]);
            DB::table('city')->insert(['id' =>264, 'municipio' => 'Curillo','estado' => 1, 'departamento_id' =>18]);
            DB::table('city')->insert(['id' =>265, 'municipio' => 'Curití','estado' => 1, 'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>266, 'municipio' => 'Curumaní','estado' => 1, 'departamento_id' =>20]);
            DB::table('city')->insert(['id' =>267, 'municipio' => 'Cáceres','estado' => 1, 'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>268, 'municipio' => 'Cáchira','estado' => 1, 'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>269, 'municipio' => 'Cácota','estado' => 1, 'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>270, 'municipio' => 'Cáqueza','estado' => 1, 'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>271, 'municipio' => 'Cértegui','estado' => 1, 'departamento_id' =>27]);
            DB::table('city')->insert(['id' =>272, 'municipio' => 'Cómbita','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>273, 'municipio' => 'Córdoba','estado' => 1, 'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>274, 'municipio' => 'Córdoba','estado' => 1, 'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>275, 'municipio' => 'Cúcuta','estado' => 1, 'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>276, 'municipio' => 'Dabeiba','estado' => 1, 'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>277, 'municipio' => 'Dagua','estado' => 1, 'departamento_id' =>76]);
            DB::table('city')->insert(['id' =>278, 'municipio' => 'Dibulla','estado' => 1, 'departamento_id' =>44]);
            DB::table('city')->insert(['id' =>279, 'municipio' => 'Distracción','estado' => 1, 'departamento_id' =>44]);
            DB::table('city')->insert(['id' =>280, 'municipio' => 'Dolores','estado' => 1, 'departamento_id' =>73]);
            DB::table('city')->insert(['id' =>281, 'municipio' => 'Don Matías','estado' => 1, 'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>282, 'municipio' => 'Dos Quebradas','estado' => 1, 'departamento_id' =>66]);
            DB::table('city')->insert(['id' =>283, 'municipio' => 'Duitama','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>284, 'municipio' => 'Durania','estado' => 1, 'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>285, 'municipio' => 'Ebéjico','estado' => 1, 'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>286, 'municipio' => 'El Bagre','estado' => 1, 'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>287, 'municipio' => 'El Banco','estado' => 1, 'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>288, 'municipio' => 'El Cairo','estado' => 1, 'departamento_id' =>76]);
            DB::table('city')->insert(['id' =>289, 'municipio' => 'El Calvario','estado' => 1, 'departamento_id' =>50]);
            DB::table('city')->insert(['id' =>290, 'municipio' => 'El Carmen','estado' => 1, 'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>291,'municipio' => 'El Carmen','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>292,'municipio' => 'El Carmen de Atrato','estado' => 1, 'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>293,'municipio' => 'El Carmen de Bolívar','estado' => 1, 'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>294,'municipio' => 'El Castillo','estado' => 1, 'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>295,'municipio' => 'El Cerrito','estado' => 1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>296,'municipio' => 'El Charco','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>297,'municipio' => 'El Cocuy','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>298,'municipio' => 'El Colegio','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>299,'municipio' => 'El Copey','estado' => 1, 'departamento_id' => 20]);
            DB::table('city')->insert(['id' =>300,'municipio' => 'El Doncello','estado' => 1, 'departamento_id' => 18]);
            DB::table('city')->insert(['id' =>301,'municipio' => 'El Dorado','estado' => 1, 'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>302,'municipio' => 'El Dovio','estado' => 1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>303,'municipio' => 'El Espino','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>304,'municipio' => 'El Guacamayo','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>305,'municipio' => 'El Guamo','estado' => 1, 'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>306,'municipio' => 'El Molino','estado' => 1, 'departamento_id' => 44]);
            DB::table('city')->insert(['id' =>307,'municipio' => 'El Paso','estado' => 1, 'departamento_id' => 20]);
            DB::table('city')->insert(['id' =>308,'municipio' => 'El Paujil','estado' => 1, 'departamento_id' => 18]);
            DB::table('city')->insert(['id' =>309,'municipio' => 'El Peñol','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>310,'municipio' => 'El Peñon','estado' => 1, 'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>311,'municipio' => 'El Peñon','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>312,'municipio' => 'El Peñón','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>313,'municipio' => 'El Piñon','estado' => 1, 'departamento_id' => 47]);
            DB::table('city')->insert(['id' =>314,'municipio' => 'El Playón','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>315,'municipio' => 'El Retorno','estado' => 1, 'departamento_id' => 95]);
            DB::table('city')->insert(['id' =>316,'municipio' => 'El Retén','estado' => 1, 'departamento_id' => 47]);
            DB::table('city')->insert(['id' =>317,'municipio' => 'El Roble','estado' => 1, 'departamento_id' => 70]);
            DB::table('city')->insert(['id' =>318,'municipio' => 'El Rosal','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>319,'municipio' => 'El Rosario','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>320,'municipio' => 'El Tablón de Gómez','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>321,'municipio' => 'El Tambo','estado' => 1, 'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>322,'municipio' => 'El Tambo','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>323,'municipio' => 'El Tarra','estado' => 1, 'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>324,'municipio' => 'El Zulia','estado' => 1, 'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>325,'municipio' => 'El Águila','estado' => 1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>326,'municipio' => 'Elías','estado' => 1, 'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>327,'municipio' => 'Encino','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>328,'municipio' => 'Enciso','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>329,'municipio' => 'Entrerríos','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>330,'municipio' => 'Envigado','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>331,'municipio' => 'Espinal','estado' => 1, 'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>332,'municipio' => 'Facatativá','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>333,'municipio' => 'Falan','estado' => 1, 'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>334,'municipio' => 'Filadelfia','estado' => 1, 'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>335,'municipio' => 'Filandia','estado' => 1, 'departamento_id' => 63]);
            DB::table('city')->insert(['id' =>336,'municipio' => 'Firavitoba','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>337,'municipio' => 'Flandes','estado' => 1, 'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>338,'municipio' => 'Florencia','estado' => 1, 'departamento_id' => 18]);
            DB::table('city')->insert(['id' =>339,'municipio' => 'Florencia','estado' => 1, 'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>340,'municipio' => 'Floresta','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>341,'municipio' => 'Florida','estado' => 1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>342,'municipio' => 'Floridablanca','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>343,'municipio' => 'Florián','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>344,'municipio' => 'Fonseca','estado' => 1, 'departamento_id' => 44]);
            DB::table('city')->insert(['id' =>345,'municipio' => 'Fortúl','estado' => 1, 'departamento_id' => 81]);
            DB::table('city')->insert(['id' =>346,'municipio' => 'Fosca','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>347,'municipio' => 'Francisco Pizarro','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>348,'municipio' => 'Fredonia','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>349,'municipio' => 'Fresno','estado' => 1, 'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>350,'municipio' => 'Frontino','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>351,'municipio' => 'Fuente de Oro','estado' => 1, 'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>352,'municipio' => 'Fundación','estado' => 1, 'departamento_id' => 47]);
            DB::table('city')->insert(['id' =>353,'municipio' => 'Funes','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>354,'municipio' => 'Funza','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>355,'municipio' => 'Fusagasugá','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>356,'municipio' => 'Fómeque','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>357,'municipio' => 'Fúquene','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>358,'municipio' => 'Gachalá','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>359,'municipio' => 'Gachancipá','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>360,'municipio' => 'Gachantivá','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>361,'municipio' => 'Gachetá','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>362,'municipio' => 'Galapa','estado' => 1, 'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>363,'municipio' => 'Galeras (Nueva Granada)','estado' => 1, 'departamento_id' => 70]);
            DB::table('city')->insert(['id' =>364,'municipio' => 'Galán','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>365,'municipio' => 'Gama','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>366,'municipio' => 'Gamarra','estado' => 1, 'departamento_id' => 20]);
            DB::table('city')->insert(['id' =>367,'municipio' => 'Garagoa','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>368,'municipio' => 'Garzón','estado' => 1, 'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>369,'municipio' => 'Gigante','estado' => 1, 'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>370,'municipio' => 'Ginebra','estado' => 1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>371,'municipio' => 'Giraldo','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>372,'municipio' => 'Girardot','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>373,'municipio' => 'Girardota','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>374,'municipio' => 'Girón','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>375,'municipio' => 'Gonzalez','estado' => 1, 'departamento_id' => 20]);
            DB::table('city')->insert(['id' =>376,'municipio' => 'Gramalote','estado' => 1, 'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>377,'municipio' => 'Granada','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>378,'municipio' => 'Granada','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>379,'municipio' => 'Granada','estado' => 1, 'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>380,'municipio' => 'Guaca','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>381,'municipio' => 'Guacamayas','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>382,'municipio' => 'Guacarí','estado' => 1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>383,'municipio' => 'Guachavés','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>384,'municipio' => 'Guachené','estado' => 1, 'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>385,'municipio' => 'Guachetá','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>386,'municipio' => 'Guachucal','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>387,'municipio' => 'Guadalupe','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>388,'municipio' => 'Guadalupe','estado' => 1, 'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>389,'municipio' => 'Guadalupe','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>390,'municipio' => 'Guaduas','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>391,'municipio' => 'Guaitarilla','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>392,'municipio' => 'Gualmatán','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>393,'municipio' => 'Guamal','estado' => 1, 'departamento_id' => 47]);
            DB::table('city')->insert(['id' =>394,'municipio' => 'Guamal','estado' => 1, 'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>395,'municipio' => 'Guamo','estado' => 1, 'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>396,'municipio' => 'Guapota','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>397,'municipio' => 'Guapí','estado' => 1, 'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>398,'municipio' => 'Guaranda','estado' => 1, 'departamento_id' => 70]);
            DB::table('city')->insert(['id' =>399,'municipio' => 'Guarne','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>400,'municipio' => 'Guasca','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>401,'municipio' => 'Guatapé','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>402,'municipio' => 'Guataquí','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>403,'municipio' => 'Guatavita','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>404,'municipio' => 'Guateque','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>405,'municipio' => 'Guavatá','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>406,'municipio' => 'Guayabal de Siquima','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>407,'municipio' => 'Guayabetal','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>408,'municipio' => 'Guayatá','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>409,'municipio' => 'Guepsa','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>410,'municipio' => 'Guicán','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>411,'municipio' => 'Gutiérrez','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>412,'municipio' => 'Guática','estado' => 1, 'departamento_id' => 66]);
            DB::table('city')->insert(['id' =>413,'municipio' => 'Gámbita','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>414,'municipio' => 'Gámeza','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>415,'municipio' => 'Génova','estado' => 1, 'departamento_id' => 63]);
            DB::table('city')->insert(['id' =>416,'municipio' => 'Gómez Plata','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>417,'municipio' => 'Hacarí','estado' => 1, 'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>418,'municipio' => 'Hatillo de Loba','estado' => 1, 'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>419,'municipio' => 'Hato','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>420,'municipio' => 'Hato Corozal','estado' => 1, 'departamento_id' => 85]);
            DB::table('city')->insert(['id' =>421,'municipio' => 'Hatonuevo','estado' => 1, 'departamento_id' => 44]);
            DB::table('city')->insert(['id' =>422,'municipio' => 'Heliconia','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>423,'municipio' => 'Herrán','estado' => 1, 'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>424,'municipio' => 'Herveo','estado' => 1, 'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>425,'municipio' => 'Hispania','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>426,'municipio' => 'Hobo','estado' => 1, 'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>427,'municipio' => 'Honda','estado' => 1, 'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>428,'municipio' => 'Ibagué','estado' => 1, 'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>429,'municipio' => 'Icononzo','estado' => 1, 'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>430,'municipio' => 'Iles','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>431,'municipio' => 'Imúes','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>432,'municipio' => 'Inzá','estado' => 1, 'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>433,'municipio' => 'Inírida','estado' => 1, 'departamento_id' => 94]);
            DB::table('city')->insert(['id' =>434,'municipio' => 'Ipiales','estado' => 1, 'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>435,'municipio' => 'Isnos','estado' => 1, 'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>436,'municipio' => 'Istmina','estado' => 1, 'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>437,'municipio' => 'Itagüí','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>438,'municipio' => 'Ituango','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>439,'municipio' => 'Izá','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>440,'municipio' => 'Jambaló','estado' => 1, 'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>441,'municipio' => 'Jamundí','estado' => 1, 'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>442,'municipio' => 'Jardín','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>443,'municipio' => 'Jenesano','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>444,'municipio' => 'Jericó','estado' => 1, 'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>445,'municipio' => 'Jericó','estado' => 1, 'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>446,'municipio' => 'Jerusalén','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>447,'municipio' => 'Jesús María','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>448,'municipio' => 'Jordán','estado' => 1, 'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>449,'municipio' => 'Juan de Acosta','estado' => 1, 'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>450,'municipio' => 'Junín','estado' => 1, 'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>451,'municipio' =>'Juradó', 'estado' =>1,'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>452,'municipio' =>'La Apartada y La Frontera', 'estado' =>1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>453,'municipio' =>'La Argentina', 'estado' =>1,'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>454,'municipio' =>'La Belleza', 'estado' =>1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>455,'municipio' =>'La Calera', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>456,'municipio' =>'La Capilla', 'estado' =>1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>457,'municipio' =>'La Ceja', 'estado' =>1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>458,'municipio' =>'La Celia', 'estado' =>1,'departamento_id' => 66]);
            DB::table('city')->insert(['id' =>459,'municipio' =>'La Cruz', 'estado' =>1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>460,'municipio' =>'La Cumbre', 'estado' =>1,'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>461,'municipio' =>'La Dorada', 'estado' =>1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>462,'municipio' =>'La Esperanza', 'estado' =>1,'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>463,'municipio' =>'La Estrella', 'estado' =>1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>464,'municipio' =>'La Florida', 'estado' =>1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>465,'municipio' =>'La Gloria', 'estado' =>1,'departamento_id' => 20]);
            DB::table('city')->insert(['id' =>466,'municipio' =>'La Jagua de Ibirico', 'estado' =>1,'departamento_id' => 20]);
            DB::table('city')->insert(['id' =>467,'municipio' =>'La Jagua del Pilar', 'estado' =>1,'departamento_id' => 44]);
            DB::table('city')->insert(['id' =>468,'municipio' =>'La Llanada', 'estado' =>1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>469,'municipio' =>'La Macarena', 'estado' =>1,'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>470,'municipio' =>'La Merced', 'estado' =>1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>471,'municipio' =>'La Mesa', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>472,'municipio' =>'La Montañita', 'estado' =>1,'departamento_id' => 18]);
            DB::table('city')->insert(['id' =>473,'municipio' =>'La Palma', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>474,'municipio' =>'La Paz', 'estado' =>1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>475,'municipio' =>'La Paz (Robles)', 'estado' =>1,'departamento_id' => 20]);
            DB::table('city')->insert(['id' =>476,'municipio' =>'La Peña', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>477,'municipio' =>'La Pintada', 'estado' =>1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>478,'municipio' =>'La Plata', 'estado' =>1,'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>479,'municipio' =>'La Playa', 'estado' =>1,'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>480,'municipio' =>'La Primavera', 'estado' =>1,'departamento_id' => 99]);
            DB::table('city')->insert(['id' =>481,'municipio' =>'La Salina', 'estado' =>1,'departamento_id' => 85]);
            DB::table('city')->insert(['id' =>482,'municipio' =>'La Sierra', 'estado' =>1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>483,'municipio' =>'La Tebaida', 'estado' =>1,'departamento_id' => 63]);
            DB::table('city')->insert(['id' =>484,'municipio' =>'La Tola', 'estado' =>1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>485,'municipio' =>'La Unión', 'estado' =>1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>486,'municipio' =>'La Unión', 'estado' =>1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>487,'municipio' =>'La Unión', 'estado' =>1,'departamento_id' => 70]);
            DB::table('city')->insert(['id' =>488,'municipio' =>'La Unión', 'estado' =>1,'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>489,'municipio' =>'La Uvita', 'estado' =>1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>490,'municipio' =>'La Vega', 'estado' =>1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>491,'municipio' =>'La Vega', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>492,'municipio' =>'La Victoria', 'estado' =>1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>493,'municipio' =>'La Victoria', 'estado' =>1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>494,'municipio' =>'La Victoria', 'estado' =>1,'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>495,'municipio' =>'La Virginia', 'estado' =>1,'departamento_id' => 66]);
            DB::table('city')->insert(['id' =>496,'municipio' =>'Labateca', 'estado' =>1,'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>497,'municipio' =>'Labranzagrande', 'estado' =>1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>498,'municipio' =>'Landázuri', 'estado' =>1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>499,'municipio' =>'Lebrija', 'estado' =>1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>500,'municipio' =>'Leiva', 'estado' =>1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>501,'municipio' =>'Lejanías', 'estado' =>1,'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>502,'municipio' =>'Lenguazaque', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>503,'municipio' =>'Leticia', 'estado' =>1,'departamento_id' => 91]);
            DB::table('city')->insert(['id' =>504,'municipio' =>'Liborina', 'estado' =>1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>505,'municipio' =>'Linares', 'estado' =>1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>506,'municipio' =>'Lloró', 'estado' =>1,'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>507,'municipio' =>'Lorica', 'estado' =>1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>508,'municipio' =>'Los Córdobas', 'estado' =>1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>509,'municipio' =>'Los Palmitos', 'estado' =>1,'departamento_id' => 70]);
            DB::table('city')->insert(['id' =>510,'municipio' =>'Los Patios', 'estado' =>1,'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>511,'municipio' =>'Los Santos', 'estado' =>1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>512,'municipio' =>'Lourdes', 'estado' =>1,'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>513,'municipio' =>'Luruaco', 'estado' =>1,'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>514,'municipio' =>'Lérida', 'estado' =>1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>515,'municipio' =>'Líbano', 'estado' =>1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>516,'municipio' =>'López (Micay)', 'estado' =>1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>517,'municipio' =>'Macanal', 'estado' =>1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>518,'municipio' =>'Macaravita', 'estado' =>1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>519,'municipio' =>'Maceo', 'estado' =>1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>520,'municipio' =>'Machetá', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>521,'municipio' =>'Madrid', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>522,'municipio' =>'Magangué', 'estado' =>1,'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>523,'municipio' =>'Magüi (Payán)', 'estado' =>1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>524,'municipio' =>'Mahates', 'estado' =>1,'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>525,'municipio' =>'Maicao', 'estado' =>1,'departamento_id' => 44]);
            DB::table('city')->insert(['id' =>526,'municipio' =>'Majagual', 'estado' =>1,'departamento_id' => 70]);
            DB::table('city')->insert(['id' =>527,'municipio' =>'Malambo', 'estado' =>1,'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>528,'municipio' =>'Mallama (Piedrancha)', 'estado' =>1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>529,'municipio' =>'Manatí', 'estado' =>1,'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>530,'municipio' =>'Manaure', 'estado' =>1,'departamento_id' => 44]);
            DB::table('city')->insert(['id' =>531,'municipio' =>'Manaure Balcón del Cesar', 'estado' =>1,'departamento_id' => 20]);
            DB::table('city')->insert(['id' =>532,'municipio' =>'Manizales', 'estado' =>1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>533,'municipio' =>'Manta', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>534,'municipio' =>'Manzanares', 'estado' =>1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>535,'municipio' =>'Maní', 'estado' =>1,'departamento_id' => 85]);
            DB::table('city')->insert(['id' =>536,'municipio' =>'Mapiripan', 'estado' =>1,'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>537,'municipio' =>'Margarita', 'estado' =>1,'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>538,'municipio' =>'Marinilla', 'estado' =>1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>539,'municipio' =>'Maripí', 'estado' =>1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>540,'municipio' =>'Mariquita', 'estado' =>1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>541,'municipio' =>'Marmato', 'estado' =>1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>542,'municipio' =>'Marquetalia', 'estado' =>1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>543,'municipio' =>'Marsella', 'estado' =>1,'departamento_id' => 66]);
            DB::table('city')->insert(['id' =>544,'municipio' =>'Marulanda', 'estado' =>1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>545,'municipio' =>'María la Baja', 'estado' =>1,'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>546,'municipio' =>'Matanza', 'estado' =>1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>547,'municipio' =>'Medellín', 'estado' =>1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>548,'municipio' =>'Medina', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>549,'municipio' =>'Medio Atrato', 'estado' =>1,'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>550,'municipio' =>'Medio Baudó', 'estado' =>1,'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>551,'municipio' =>'Medio San Juan (ANDAGOYA)', 'estado' =>1,'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>552,'municipio' =>'Melgar', 'estado' =>1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>553,'municipio' =>'Mercaderes', 'estado' =>1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>554,'municipio' =>'Mesetas', 'estado' =>1,'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>555,'municipio' =>'Milán', 'estado' =>1,'departamento_id' => 18]);
            DB::table('city')->insert(['id' =>556,'municipio' =>'Miraflores', 'estado' =>1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>557,'municipio' =>'Miraflores', 'estado' =>1,'departamento_id' => 95]);
            DB::table('city')->insert(['id' =>558,'municipio' =>'Miranda', 'estado' =>1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>559,'municipio' =>'Mistrató', 'estado' =>1,'departamento_id' => 66]);
            DB::table('city')->insert(['id' =>560,'municipio' =>'Mitú', 'estado' =>1,'departamento_id' => 97]);
            DB::table('city')->insert(['id' =>561,'municipio' =>'Mocoa', 'estado' =>1,'departamento_id' => 86]);
            DB::table('city')->insert(['id' =>562,'municipio' =>'Mogotes', 'estado' =>1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>563,'municipio' =>'Molagavita', 'estado' =>1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>564,'municipio' =>'Momil', 'estado' =>1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>565,'municipio' =>'Mompós', 'estado' =>1,'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>566,'municipio' =>'Mongua', 'estado' =>1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>567,'municipio' =>'Monguí', 'estado' =>1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>568,'municipio' =>'Moniquirá', 'estado' =>1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>569,'municipio' =>'Montebello', 'estado' =>1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>570,'municipio' =>'Montecristo', 'estado' =>1,'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>571,'municipio' =>'Montelíbano', 'estado' =>1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>572,'municipio' =>'Montenegro', 'estado' =>1,'departamento_id' => 63]);
            DB::table('city')->insert(['id' =>573,'municipio' =>'Monteria', 'estado' =>1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>574,'municipio' =>'Monterrey', 'estado' =>1,'departamento_id' => 85]);
            DB::table('city')->insert(['id' =>575,'municipio' =>'Morales', 'estado' =>1,'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>576,'municipio' =>'Morales', 'estado' =>1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>577,'municipio' =>'Morelia', 'estado' =>1,'departamento_id' => 18]);
            DB::table('city')->insert(['id' =>578,'municipio' =>'Morroa', 'estado' =>1,'departamento_id' => 70]);
            DB::table('city')->insert(['id' =>579,'municipio' =>'Mosquera', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>580,'municipio' =>'Mosquera', 'estado' =>1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>581,'municipio' =>'Motavita', 'estado' =>1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>582,'municipio' =>'Moñitos', 'estado' =>1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>583,'municipio' =>'Murillo', 'estado' =>1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>584,'municipio' =>'Murindó', 'estado' =>1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>585,'municipio' =>'Mutatá', 'estado' =>1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>586,'municipio' =>'Mutiscua', 'estado' =>1,'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>587,'municipio' =>'Muzo', 'estado' =>1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>588,'municipio' =>'Málaga', 'estado' =>1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>589,'municipio' =>'Nariño', 'estado' =>1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>590,'municipio' =>'Nariño', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>591,'municipio' =>'Nariño', 'estado' =>1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>592,'municipio' =>'Natagaima', 'estado' =>1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>593,'municipio' =>'Nechí', 'estado' =>1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>594,'municipio' =>'Necoclí', 'estado' =>1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>595,'municipio' =>'Neira', 'estado' =>1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>596,'municipio' =>'Neiva', 'estado' =>1,'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>597,'municipio' =>'Nemocón', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>598,'municipio' =>'Nilo', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>599,'municipio' =>'Nimaima', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>600,'municipio' =>'Nobsa', 'estado' =>1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>601,'municipio' =>'Nocaima', 'estado' =>1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>602,'municipio' =>'Norcasia', 'estado' =>1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>603,'municipio' =>'Norosí', 'estado' =>1,'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>604,'municipio' =>'Novita', 'estado' =>1,'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>605,'municipio' =>'Nueva Granada', 'estado' =>1,'departamento_id' => 47]);
            DB::table('city')->insert(['id' =>606,'municipio' =>'Nuevo Colón', 'estado' =>1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>607,'municipio' =>'Nunchía', 'estado' =>1,'departamento_id' => 85]);
            DB::table('city')->insert(['id' =>608,'municipio' =>'Nuquí', 'estado' =>1,'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>609,'municipio' =>'Nátaga', 'estado' =>1,'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>610,'municipio' =>'Obando', 'estado' =>1,'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>611,'municipio' => 'Ocamonte', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>612,'municipio' => 'Ocaña', 'estado' => 1,'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>613,'municipio' => 'Oiba', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>614,'municipio' => 'Oicatá', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>615,'municipio' => 'Olaya', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>616,'municipio' => 'Olaya Herrera', 'estado' => 1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>617,'municipio' => 'Onzaga', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>618,'municipio' => 'Oporapa', 'estado' => 1,'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>619,'municipio' => 'Orito', 'estado' => 1,'departamento_id' => 86]);
            DB::table('city')->insert(['id' =>620,'municipio' => 'Orocué', 'estado' => 1,'departamento_id' => 85]);
            DB::table('city')->insert(['id' =>621,'municipio' => 'Ortega', 'estado' => 1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>622,'municipio' => 'Ospina', 'estado' => 1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>623,'municipio' => 'Otanche', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>624,'municipio' => 'Ovejas', 'estado' => 1,'departamento_id' => 70]);
            DB::table('city')->insert(['id' =>625,'municipio' => 'Pachavita', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>626,'municipio' => 'Pacho', 'estado' => 1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>627,'municipio' => 'Padilla', 'estado' => 1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>628,'municipio' => 'Paicol', 'estado' => 1,'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>629,'municipio' => 'Pailitas', 'estado' => 1,'departamento_id' => 20]);
            DB::table('city')->insert(['id' =>630,'municipio' => 'Paime', 'estado' => 1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>631,'municipio' => 'Paipa', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>632,'municipio' => 'Pajarito', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>633,'municipio' => 'Palermo', 'estado' => 1,'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>634,'municipio' => 'Palestina', 'estado' => 1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>635,'municipio' => 'Palestina', 'estado' => 1,'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>636,'municipio' => 'Palmar', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>637,'municipio' => 'Palmar de Varela', 'estado' => 1,'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>638,'municipio' => 'Palmas del Socorro', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>639,'municipio' => 'Palmira', 'estado' => 1,'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>640,'municipio' => 'Palmito', 'estado' => 1,'departamento_id' => 70]);
            DB::table('city')->insert(['id' =>641,'municipio' => 'Palocabildo', 'estado' => 1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>642,'municipio' => 'Pamplona', 'estado' => 1,'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>643,'municipio' => 'Pamplonita', 'estado' => 1,'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>644,'municipio' => 'Pandi', 'estado' => 1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>645,'municipio' => 'Panqueba', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>646,'municipio' => 'Paratebueno', 'estado' => 1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>647,'municipio' => 'Pasca', 'estado' => 1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>648,'municipio' => 'Patía (El Bordo)', 'estado' => 1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>649,'municipio' => 'Pauna', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>650,'municipio' => 'Paya', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>651,'municipio' => 'Paz de Ariporo', 'estado' => 1,'departamento_id' => 85]);
            DB::table('city')->insert(['id' =>652,'municipio' => 'Paz de Río', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>653,'municipio' => 'Pedraza', 'estado' => 1,'departamento_id' => 47]);
            DB::table('city')->insert(['id' =>654,'municipio' => 'Pelaya', 'estado' => 1,'departamento_id' => 20]);
            DB::table('city')->insert(['id' =>655,'municipio' => 'Pensilvania', 'estado' => 1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>656,'municipio' => 'Peque', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>657,'municipio' => 'Pereira', 'estado' => 1,'departamento_id' => 66]);
            DB::table('city')->insert(['id' =>658,'municipio' => 'Pesca', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>659,'municipio' => 'Peñol', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>660,'municipio' => 'Piamonte', 'estado' => 1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>661,'municipio' => 'Pie de Cuesta', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>662,'municipio' => 'Piedras', 'estado' => 1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>663,'municipio' => 'Piendamó', 'estado' => 1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>664,'municipio' => 'Pijao', 'estado' => 1,'departamento_id' => 63]);
            DB::table('city')->insert(['id' =>665,'municipio' => 'Pijiño', 'estado' => 1,'departamento_id' => 47]);
            DB::table('city')->insert(['id' =>666,'municipio' => 'Pinchote', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>667,'municipio' => 'Pinillos', 'estado' => 1,'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>668,'municipio' => 'Piojo', 'estado' => 1,'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>669,'municipio' => 'Pisva', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>670,'municipio' => 'Pital', 'estado' => 1,'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>671,'municipio' => 'Pitalito', 'estado' => 1,'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>672,'municipio' => 'Pivijay', 'estado' => 1,'departamento_id' => 47]);
            DB::table('city')->insert(['id' =>673,'municipio' => 'Planadas', 'estado' => 1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>674,'municipio' => 'Planeta Rica', 'estado' => 1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>675,'municipio' => 'Plato', 'estado' => 1,'departamento_id' => 47]);
            DB::table('city')->insert(['id' =>676,'municipio' => 'Policarpa', 'estado' => 1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>677,'municipio' => 'Polonuevo', 'estado' => 1,'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>678,'municipio' => 'Ponedera', 'estado' => 1,'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>679,'municipio' => 'Popayán', 'estado' => 1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>680,'municipio' => 'Pore', 'estado' => 1,'departamento_id' => 85]);
            DB::table('city')->insert(['id' =>681,'municipio' => 'Potosí', 'estado' => 1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>682,'municipio' => 'Pradera', 'estado' => 1,'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>683,'municipio' => 'Prado', 'estado' => 1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>684,'municipio' => 'Providencia', 'estado' => 1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>685,'municipio' => 'Providencia', 'estado' => 1,'departamento_id' => 88]);
            DB::table('city')->insert(['id' =>686,'municipio' => 'Pueblo Bello', 'estado' => 1,'departamento_id' => 20]);
            DB::table('city')->insert(['id' =>687,'municipio' => 'Pueblo Nuevo', 'estado' => 1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>688,'municipio' => 'Pueblo Rico', 'estado' => 1,'departamento_id' => 66]);
            DB::table('city')->insert(['id' =>689,'municipio' => 'Pueblorrico', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>690,'municipio' => 'Puebloviejo', 'estado' => 1,'departamento_id' => 47]);
            DB::table('city')->insert(['id' =>691,'municipio' => 'Puente Nacional', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>692,'municipio' => 'Puerres', 'estado' => 1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>693,'municipio' => 'Puerto Asís', 'estado' => 1,'departamento_id' => 86]);
            DB::table('city')->insert(['id' =>694,'municipio' => 'Puerto Berrío', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>695,'municipio' => 'Puerto Boyacá', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>696,'municipio' => 'Puerto Caicedo', 'estado' => 1,'departamento_id' => 86]);
            DB::table('city')->insert(['id' =>697,'municipio' => 'Puerto Carreño', 'estado' => 1,'departamento_id' => 99]);
            DB::table('city')->insert(['id' =>698,'municipio' => 'Puerto Colombia', 'estado' => 1,'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>699,'municipio' => 'Puerto Concordia', 'estado' => 1,'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>700,'municipio' => 'Puerto Escondido', 'estado' => 1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>701,'municipio' => 'Puerto Gaitán', 'estado' => 1,'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>702,'municipio' => 'Puerto Guzmán', 'estado' => 1,'departamento_id' => 86]);
            DB::table('city')->insert(['id' =>703,'municipio' => 'Puerto Leguízamo', 'estado' => 1,'departamento_id' => 86]);
            DB::table('city')->insert(['id' =>704,'municipio' => 'Puerto Libertador', 'estado' => 1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>705,'municipio' => 'Puerto Lleras', 'estado' => 1,'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>706,'municipio' => 'Puerto López', 'estado' => 1,'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>707,'municipio' => 'Puerto Nare', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>708,'municipio' => 'Puerto Nariño', 'estado' => 1,'departamento_id' => 91]);
            DB::table('city')->insert(['id' =>709,'municipio' => 'Puerto Parra', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>710,'municipio' => 'Puerto Rico', 'estado' => 1,'departamento_id' => 18]);
            DB::table('city')->insert(['id' =>711,'municipio' => 'Puerto Rico', 'estado' => 1,'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>712,'municipio' => 'Puerto Rondón', 'estado' => 1,'departamento_id' => 81]);
            DB::table('city')->insert(['id' =>713,'municipio' => 'Puerto Salgar', 'estado' => 1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>714,'municipio' => 'Puerto Santander', 'estado' => 1,'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>715,'municipio' => 'Puerto Tejada', 'estado' => 1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>716,'municipio' => 'Puerto Triunfo', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>717,'municipio' => 'Puerto Wilches', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>718,'municipio' => 'Pulí', 'estado' => 1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>719,'municipio' => 'Pupiales', 'estado' => 1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>720,'municipio' => 'Puracé (Coconuco)', 'estado' => 1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>721,'municipio' => 'Purificación', 'estado' => 1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>722,'municipio' => 'Purísima', 'estado' => 1,'departamento_id' => 23]);
            DB::table('city')->insert(['id' =>723,'municipio' => 'Pácora', 'estado' => 1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>724,'municipio' => 'Páez', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>725,'municipio' => 'Páez (Belalcazar)', 'estado' => 1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>726,'municipio' => 'Páramo', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>727,'municipio' => 'Quebradanegra', 'estado' => 1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>728,'municipio' => 'Quetame', 'estado' => 1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>729,'municipio' => 'Quibdó', 'estado' => 1,'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>730,'municipio' => 'Quimbaya', 'estado' => 1,'departamento_id' => 63]);
            DB::table('city')->insert(['id' =>731,'municipio' => 'Quinchía', 'estado' => 1,'departamento_id' => 66]);
            DB::table('city')->insert(['id' =>732,'municipio' => 'Quipama', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>733,'municipio' => 'Quipile', 'estado' => 1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>734,'municipio' => 'Ragonvalia', 'estado' => 1,'departamento_id' => 54]);
            DB::table('city')->insert(['id' =>735,'municipio' => 'Ramiriquí', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>736,'municipio' => 'Recetor', 'estado' => 1,'departamento_id' => 85]);
            DB::table('city')->insert(['id' =>737,'municipio' => 'Regidor', 'estado' => 1,'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>738,'municipio' => 'Remedios', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>739,'municipio' => 'Remolino', 'estado' => 1,'departamento_id' => 47]);
            DB::table('city')->insert(['id' =>740,'municipio' => 'Repelón', 'estado' => 1,'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>741,'municipio' => 'Restrepo', 'estado' => 1,'departamento_id' => 50]);
            DB::table('city')->insert(['id' =>742,'municipio' => 'Restrepo', 'estado' => 1,'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>743,'municipio' => 'Retiro', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>744,'municipio' => 'Ricaurte', 'estado' => 1,'departamento_id' => 25]);
            DB::table('city')->insert(['id' =>745,'municipio' => 'Ricaurte', 'estado' => 1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>746,'municipio' => 'Rio Negro', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>747,'municipio' => 'Rioblanco', 'estado' => 1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>748,'municipio' => 'Riofrío', 'estado' => 1,'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>749,'municipio' => 'Riohacha', 'estado' => 1,'departamento_id' => 44]);
            DB::table('city')->insert(['id' =>750,'municipio' => 'Risaralda', 'estado' => 1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>751,'municipio' => 'Rivera', 'estado' => 1,'departamento_id' => 41]);
            DB::table('city')->insert(['id' =>752,'municipio' => 'Roberto Payán (San José)', 'estado' => 1,'departamento_id' => 52]);
            DB::table('city')->insert(['id' =>753,'municipio' => 'Roldanillo', 'estado' => 1,'departamento_id' => 76]);
            DB::table('city')->insert(['id' =>754,'municipio' => 'Roncesvalles', 'estado' => 1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>755,'municipio' => 'Rondón', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>756,'municipio' => 'Rosas', 'estado' => 1,'departamento_id' => 19]);
            DB::table('city')->insert(['id' =>757,'municipio' => 'Rovira', 'estado' => 1,'departamento_id' => 73]);
            DB::table('city')->insert(['id' =>758,'municipio' => 'Ráquira', 'estado' => 1,'departamento_id' => 15]);
            DB::table('city')->insert(['id' =>759,'municipio' => 'Río Iró', 'estado' => 1,'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>760,'municipio' => 'Río Quito', 'estado' => 1,'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>761,'municipio' => 'Río Sucio', 'estado' => 1,'departamento_id' => 17]);
            DB::table('city')->insert(['id' =>762,'municipio' => 'Río Viejo', 'estado' => 1,'departamento_id' => 13]);
            DB::table('city')->insert(['id' =>763,'municipio' => 'Río de oro', 'estado' => 1,'departamento_id' => 20]);
            DB::table('city')->insert(['id' =>764,'municipio' => 'Ríonegro', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>765,'municipio' => 'Ríosucio', 'estado' => 1,'departamento_id' => 27]);
            DB::table('city')->insert(['id' =>766,'municipio' => 'Sabana de Torres', 'estado' => 1,'departamento_id' => 68]);
            DB::table('city')->insert(['id' =>767,'municipio' => 'Sabanagrande', 'estado' => 1,'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>768,'municipio' => 'Sabanalarga', 'estado' => 1,'departamento_id' => 5]);
            DB::table('city')->insert(['id' =>769,'municipio' => 'Sabanalarga', 'estado' => 1,'departamento_id' => 8]);
            DB::table('city')->insert(['id' =>770,'municipio' => 'Sabanalarga', 'estado' => 1,'departamento_id' => 85]);
            DB::table('city')->insert(['id' =>771,'municipio' => 'Sabanas de San Angel (SAN ANGEL)','estado' => 1,'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>772,'municipio' => 'Sabaneta','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>773,'municipio' => 'Saboyá','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>774,'municipio' => 'Sahagún','estado' => 1,'departamento_id' =>23]);
            DB::table('city')->insert(['id' =>775,'municipio' => 'Saladoblanco','estado' => 1,'departamento_id' =>41]);
            DB::table('city')->insert(['id' =>776,'municipio' => 'Salamina','estado' => 1,'departamento_id' =>17]);
            DB::table('city')->insert(['id' =>777,'municipio' => 'Salamina','estado' => 1,'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>778,'municipio' => 'Salazar','estado' => 1,'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>779,'municipio' => 'Saldaña','estado' => 1,'departamento_id' =>73]);
            DB::table('city')->insert(['id' =>780,'municipio' => 'Salento','estado' => 1,'departamento_id' =>63]);
            DB::table('city')->insert(['id' =>781,'municipio' => 'Salgar','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>782,'municipio' => 'Samacá','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>783,'municipio' => 'Samaniego','estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>784,'municipio' => 'Samaná','estado' => 1,'departamento_id' =>17]);
            DB::table('city')->insert(['id' =>785,'municipio' => 'Sampués','estado' => 1,'departamento_id' =>70]);
            DB::table('city')->insert(['id' =>786,'municipio' => 'San Agustín','estado' => 1,'departamento_id' =>41]);
            DB::table('city')->insert(['id' =>787,'municipio' => 'San Alberto','estado' => 1,'departamento_id' =>20]);
            DB::table('city')->insert(['id' =>788,'municipio' => 'San Andrés','estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>789,'municipio' => 'San Andrés Sotavento','estado' => 1,'departamento_id' =>23]);
            DB::table('city')->insert(['id' =>790,'municipio' => 'San Andrés de Cuerquía','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>791,'municipio' => 'San Antero','estado' => 1,'departamento_id' =>23]);
            DB::table('city')->insert(['id' =>792,'municipio' => 'San Antonio','estado' => 1,'departamento_id' =>73]);
            DB::table('city')->insert(['id' =>793,'municipio' => 'San Antonio de Tequendama','estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>794,'municipio' => 'San Benito','estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>795,'municipio' => 'San Benito Abad','estado' => 1,'departamento_id' =>70]);
            DB::table('city')->insert(['id' =>796,'municipio' => 'San Bernardo','estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>797,'municipio' => 'San Bernardo','estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>798,'municipio' => 'San Bernardo del Viento','estado' => 1,'departamento_id' =>23]);
            DB::table('city')->insert(['id' =>799,'municipio' => 'San Calixto','estado' => 1,'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>800,'municipio' => 'San Carlos','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>801,'municipio' => 'San Carlos','estado' => 1,'departamento_id' =>23]);
            DB::table('city')->insert(['id' =>802,'municipio' => 'San Carlos de Guaroa','estado' => 1,'departamento_id' =>50]);
            DB::table('city')->insert(['id' =>803,'municipio' => 'San Cayetano','estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>804,'municipio' => 'San Cayetano','estado' => 1,'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>805,'municipio' => 'San Cristobal','estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>806,'municipio' => 'San Diego','estado' => 1,'departamento_id' =>20]);
            DB::table('city')->insert(['id' =>807,'municipio' => 'San Eduardo','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>808,'municipio' => 'San Estanislao','estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>809,'municipio' => 'San Fernando','estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>810,'municipio' => 'San Francisco','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>811,'municipio' => 'San Francisco','estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>812,'municipio' => 'San Francisco','estado' => 1,'departamento_id' =>86]);
            DB::table('city')->insert(['id' =>813,'municipio' => 'San Gíl','estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>814,'municipio' => 'San Jacinto','estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>815,'municipio' => 'San Jacinto del Cauca','estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>816,'municipio' => 'San Jerónimo','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>817,'municipio' => 'San Joaquín','estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>818,'municipio' => 'San José','estado' => 1,'departamento_id' =>17]);
            DB::table('city')->insert(['id' =>819,'municipio' => 'San José de Miranda','estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>820,'municipio' => 'San José de Montaña','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>821,'municipio' => 'San José de Pare','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>822,'municipio' => 'San José de Uré','estado' => 1,'departamento_id' =>23]);
            DB::table('city')->insert(['id' =>823,'municipio' => 'San José del Fragua','estado' => 1,'departamento_id' =>18]);
            DB::table('city')->insert(['id' =>824,'municipio' => 'San José del Guaviare','estado' => 1,'departamento_id' =>95]);
            DB::table('city')->insert(['id' =>825,'municipio' => 'San José del Palmar','estado' => 1,'departamento_id' =>27]);
            DB::table('city')->insert(['id' =>826,'municipio' => 'San Juan de Arama','estado' => 1,'departamento_id' =>50]);
            DB::table('city')->insert(['id' =>827,'municipio' => 'San Juan de Betulia','estado' => 1,'departamento_id' =>70]);
            DB::table('city')->insert(['id' =>828,'municipio' => 'San Juan de Nepomuceno','estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>829,'municipio' => 'San Juan de Pasto','estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>830,'municipio' => 'San Juan de Río Seco','estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>831,'municipio' => 'San Juan de Urabá','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>832,'municipio' => 'San Juan del Cesar','estado' => 1,'departamento_id' =>44]);
            DB::table('city')->insert(['id' =>833,'municipio' => 'San Juanito','estado' => 1,'departamento_id' =>50]);
            DB::table('city')->insert(['id' =>834,'municipio' => 'San Lorenzo','estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>835,'municipio' => 'San Luis','estado' => 1,'departamento_id' =>73]);
            DB::table('city')->insert(['id' =>836,'municipio' => 'San Luís','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>837,'municipio' => 'San Luís de Gaceno','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>838,'municipio' => 'San Luís de Palenque','estado' => 1,'departamento_id' =>85]);
            DB::table('city')->insert(['id' =>839,'municipio' => 'San Marcos','estado' => 1,'departamento_id' =>70]);
            DB::table('city')->insert(['id' =>840,'municipio' => 'San Martín','estado' => 1,'departamento_id' =>20]);
            DB::table('city')->insert(['id' =>841,'municipio' => 'San Martín','estado' => 1,'departamento_id' =>50]);
            DB::table('city')->insert(['id' =>842,'municipio' => 'San Martín de Loba','estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>843,'municipio' => 'San Mateo','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>844,'municipio' => 'San Miguel','estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>845,'municipio' => 'San Miguel','estado' => 1,'departamento_id' =>86]);
            DB::table('city')->insert(['id' =>846,'municipio' => 'San Miguel de Sema','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>847,'municipio' => 'San Onofre','estado' => 1,'departamento_id' =>70]);
            DB::table('city')->insert(['id' =>848,'municipio' => 'San Pablo','estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>849,'municipio' => 'San Pablo','estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>850,'municipio' => 'San Pablo de Borbur','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>851,'municipio' => 'San Pedro','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>852,'municipio' => 'San Pedro','estado' => 1,'departamento_id' =>70]);
            DB::table('city')->insert(['id' =>853,'municipio' => 'San Pedro','estado' => 1,'departamento_id' =>76]);
            DB::table('city')->insert(['id' =>854,'municipio' => 'San Pedro de Cartago','estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>855,'municipio' => 'San Pedro de Urabá','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>856,'municipio' => 'San Pelayo','estado' => 1,'departamento_id' =>23]);
            DB::table('city')->insert(['id' =>857,'municipio' => 'San Rafael','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>858,'municipio' => 'San Roque','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>859,'municipio' => 'San Sebastián','estado' => 1,'departamento_id' =>19]);
            DB::table('city')->insert(['id' =>860,'municipio' => 'San Sebastián de Buenavista','estado' => 1,'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>861,'municipio' => 'San Vicente','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>862,'municipio' => 'San Vicente del Caguán','estado' => 1,'departamento_id' =>18]);
            DB::table('city')->insert(['id' =>863,'municipio' => 'San Vicente del Chucurí','estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>864,'municipio' => 'San Zenón','estado' => 1,'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>865,'municipio' => 'Sandoná','estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>866,'municipio' => 'Santa Ana','estado' => 1,'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>867,'municipio' => 'Santa Bárbara','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>868,'municipio' => 'Santa Bárbara','estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>869,'municipio' => 'Santa Bárbara (Iscuandé)','estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>870,'municipio' => 'Santa Bárbara de Pinto','estado' => 1,'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>871,'municipio' => 'Santa Catalina','estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>872,'municipio' => 'Santa Fé de Antioquia','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>873,'municipio' => 'Santa Genoveva de Docorodó','estado' => 1,'departamento_id' =>27]);
            DB::table('city')->insert(['id' =>874,'municipio' => 'Santa Helena del Opón','estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>875,'municipio' => 'Santa Isabel','estado' => 1,'departamento_id' =>73]);
            DB::table('city')->insert(['id' =>876,'municipio' => 'Santa Lucía','estado' => 1,'departamento_id' =>8]);
            DB::table('city')->insert(['id' =>877,'municipio' => 'Santa Marta','estado' => 1,'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>878,'municipio' => 'Santa María','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>879,'municipio' => 'Santa María','estado' => 1,'departamento_id' =>41]);
            DB::table('city')->insert(['id' =>880,'municipio' => 'Santa Rosa','estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>881,'municipio' => 'Santa Rosa','estado' => 1,'departamento_id' =>19]);
            DB::table('city')->insert(['id' =>882,'municipio' => 'Santa Rosa de Cabal','estado' => 1,'departamento_id' =>66]);
            DB::table('city')->insert(['id' =>883,'municipio' => 'Santa Rosa de Osos','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>884,'municipio' => 'Santa Rosa de Viterbo','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>885,'municipio' => 'Santa Rosa del Sur','estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>886,'municipio' => 'Santa Rosalía','estado' => 1,'departamento_id' =>99]);
            DB::table('city')->insert(['id' =>887,'municipio' => 'Santa Sofía','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>888,'municipio' => 'Santana','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>889,'municipio' => 'Santander de Quilichao','estado' => 1,'departamento_id' =>19]);
            DB::table('city')->insert(['id' =>890,'municipio' => 'Santiago','estado' => 1,'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>891,'municipio' => 'Santiago','estado' => 1,'departamento_id' =>86]);
            DB::table('city')->insert(['id' =>892,'municipio' => 'Santo Domingo','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>893,'municipio' => 'Santo Tomás','estado' => 1,'departamento_id' =>8]);
            DB::table('city')->insert(['id' =>894,'municipio' => 'Santuario','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>895,'municipio' => 'Santuario','estado' => 1,'departamento_id' =>66]);
            DB::table('city')->insert(['id' =>896,'municipio' => 'Sapuyes','estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>897,'municipio' => 'Saravena','estado' => 1,'departamento_id' =>81]);
            DB::table('city')->insert(['id' =>898,'municipio' => 'Sardinata','estado' => 1,'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>899,'municipio' => 'Sasaima','estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>900,'municipio' => 'Sativanorte','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>901,'municipio' => 'Sativasur','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>902,'municipio' => 'Segovia','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>903,'municipio' => 'Sesquilé','estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>904,'municipio' => 'Sevilla','estado' => 1,'departamento_id' =>76]);
            DB::table('city')->insert(['id' =>905,'municipio' => 'Siachoque','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>906,'municipio' => 'Sibaté','estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>907,'municipio' => 'Sibundoy','estado' => 1,'departamento_id' =>86]);
            DB::table('city')->insert(['id' =>908,'municipio' => 'Silos','estado' => 1,'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>909,'municipio' => 'Silvania','estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>910,'municipio' => 'Silvia','estado' => 1,'departamento_id' =>19]);
            DB::table('city')->insert(['id' =>911,'municipio' => 'Simacota','estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>912,'municipio' => 'Simijaca','estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>913,'municipio' => 'Simití','estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>914,'municipio' => 'Sincelejo','estado' => 1,'departamento_id' =>70]);
            DB::table('city')->insert(['id' =>915,'municipio' => 'Sincé','estado' => 1,'departamento_id' =>70]);
            DB::table('city')->insert(['id' =>916,'municipio' => 'Sipí','estado' => 1,'departamento_id' =>27]);
            DB::table('city')->insert(['id' =>917,'municipio' => 'Sitionuevo','estado' => 1,'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>918,'municipio' => 'Soacha','estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>919,'municipio' => 'Soatá','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>920,'municipio' => 'Socha','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>921,'municipio' => 'Socorro','estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>922,'municipio' => 'Socotá','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>923,'municipio' => 'Sogamoso','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>924,'municipio' => 'Solano','estado' => 1,'departamento_id' =>18]);
            DB::table('city')->insert(['id' =>925,'municipio' => 'Soledad','estado' => 1,'departamento_id' =>8]);
            DB::table('city')->insert(['id' =>926,'municipio' => 'Solita','estado' => 1,'departamento_id' =>18]);
            DB::table('city')->insert(['id' =>927,'municipio' => 'Somondoco','estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>928,'municipio' => 'Sonsón','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>929,'municipio' => 'Sopetrán','estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>930,'municipio' => 'Soplaviento','estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>931,'municipio' => 'Sopó', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>932,'municipio' => 'Sora', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>933,'municipio' => 'Soracá', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>934,'municipio' => 'Sotaquirá', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>935,'municipio' => 'Sotara (Paispamba)', 'estado' => 1,'departamento_id' =>19]);
            DB::table('city')->insert(['id' =>936,'municipio' => 'Sotomayor (Los Andes)', 'estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>937,'municipio' => 'Suaita', 'estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>938,'municipio' => 'Suan', 'estado' => 1,'departamento_id' =>8]);
            DB::table('city')->insert(['id' =>939,'municipio' => 'Suaza', 'estado' => 1,'departamento_id' =>41]);
            DB::table('city')->insert(['id' =>940,'municipio' => 'Subachoque', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>941,'municipio' => 'Sucre', 'estado' => 1,'departamento_id' =>19]);
            DB::table('city')->insert(['id' =>942,'municipio' => 'Sucre', 'estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>943,'municipio' => 'Sucre', 'estado' => 1,'departamento_id' =>70]);
            DB::table('city')->insert(['id' =>944,'municipio' => 'Suesca', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>945,'municipio' => 'Supatá', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>946,'municipio' => 'Supía', 'estado' => 1,'departamento_id' =>17]);
            DB::table('city')->insert(['id' =>947,'municipio' => 'Suratá', 'estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>948,'municipio' => 'Susa', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>949,'municipio' => 'Susacón', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>950,'municipio' => 'Sutamarchán', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>951,'municipio' => 'Sutatausa', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>952,'municipio' => 'Sutatenza', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>953,'municipio' => 'Suárez', 'estado' => 1,'departamento_id' =>19]);
            DB::table('city')->insert(['id' =>954,'municipio' => 'Suárez', 'estado' => 1,'departamento_id' =>73]);
            DB::table('city')->insert(['id' =>955,'municipio' => 'Sácama', 'estado' => 1,'departamento_id' =>85]);
            DB::table('city')->insert(['id' =>956,'municipio' => 'Sáchica', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>957,'municipio' => 'Tabio', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>958,'municipio' => 'Tadó', 'estado' => 1,'departamento_id' =>27]);
            DB::table('city')->insert(['id' =>959,'municipio' => 'Talaigua Nuevo', 'estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>960,'municipio' => 'Tamalameque', 'estado' => 1,'departamento_id' =>20]);
            DB::table('city')->insert(['id' =>961,'municipio' => 'Tame', 'estado' => 1,'departamento_id' =>81]);
            DB::table('city')->insert(['id' =>962,'municipio' => 'Taminango', 'estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>963,'municipio' => 'Tangua', 'estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>964,'municipio' => 'Taraira', 'estado' => 1,'departamento_id' =>97]);
            DB::table('city')->insert(['id' =>965,'municipio' => 'Tarazá', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>966,'municipio' => 'Tarqui', 'estado' => 1,'departamento_id' =>41]);
            DB::table('city')->insert(['id' =>967,'municipio' => 'Tarso', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>968,'municipio' => 'Tasco', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>969,'municipio' => 'Tauramena', 'estado' => 1,'departamento_id' =>85]);
            DB::table('city')->insert(['id' =>970,'municipio' => 'Tausa', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>971,'municipio' => 'Tello', 'estado' => 1,'departamento_id' =>41]);
            DB::table('city')->insert(['id' =>972,'municipio' => 'Tena', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>973,'municipio' => 'Tenerife', 'estado' => 1,'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>974,'municipio' => 'Tenjo', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>975,'municipio' => 'Tenza', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>976,'municipio' => 'Teorama', 'estado' => 1,'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>977,'municipio' => 'Teruel', 'estado' => 1,'departamento_id' =>41]);
            DB::table('city')->insert(['id' =>978,'municipio' => 'Tesalia', 'estado' => 1,'departamento_id' =>41]);
            DB::table('city')->insert(['id' =>979,'municipio' => 'Tibacuy', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>980,'municipio' => 'Tibaná', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>981,'municipio' => 'Tibasosa', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>982,'municipio' => 'Tibirita', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>983,'municipio' => 'Tibú', 'estado' => 1,'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>984,'municipio' => 'Tierralta', 'estado' => 1,'departamento_id' =>23]);
            DB::table('city')->insert(['id' =>985,'municipio' => 'Timaná', 'estado' => 1,'departamento_id' =>41]);
            DB::table('city')->insert(['id' =>986,'municipio' => 'Timbiquí', 'estado' => 1,'departamento_id' =>19]);
            DB::table('city')->insert(['id' =>987,'municipio' => 'Timbío', 'estado' => 1,'departamento_id' =>19]);
            DB::table('city')->insert(['id' =>988,'municipio' => 'Tinjacá', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>989,'municipio' => 'Tipacoque', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>990,'municipio' => 'Tiquisio (Puerto Rico)', 'estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>991,'municipio' => 'Titiribí', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>992,'municipio' => 'Toca', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>993,'municipio' => 'Tocaima', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>994,'municipio' => 'Tocancipá', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>995,'municipio' => 'Toguí', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>996,'municipio' => 'Toledo', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>997,'municipio' => 'Toledo', 'estado' => 1,'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>998,'municipio' => 'Tolú', 'estado' => 1,'departamento_id' =>70]);
            DB::table('city')->insert(['id' =>999,'municipio' => 'Tolú Viejo', 'estado' => 1,'departamento_id' =>70]);
            DB::table('city')->insert(['id' =>1000,'municipio' => 'Tona', 'estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>1001,'municipio' => 'Topagá', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>1002,'municipio' => 'Topaipí', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1003,'municipio' => 'Toribío', 'estado' => 1,'departamento_id' =>19]);
            DB::table('city')->insert(['id' =>1004,'municipio' => 'Toro', 'estado' => 1,'departamento_id' =>76]);
            DB::table('city')->insert(['id' =>1005,'municipio' => 'Tota', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>1006,'municipio' => 'Totoró', 'estado' => 1,'departamento_id' =>19]);
            DB::table('city')->insert(['id' =>1007,'municipio' => 'Trinidad', 'estado' => 1,'departamento_id' =>85]);
            DB::table('city')->insert(['id' =>1008,'municipio' => 'Trujillo', 'estado' => 1,'departamento_id' =>76]);
            DB::table('city')->insert(['id' =>1009,'municipio' => 'Tubará', 'estado' => 1,'departamento_id' =>8]);
            DB::table('city')->insert(['id' =>1010,'municipio' => 'Tuchín', 'estado' => 1,'departamento_id' =>23]);
            DB::table('city')->insert(['id' =>1011,'municipio' => 'Tulúa', 'estado' => 1,'departamento_id' =>76]);
            DB::table('city')->insert(['id' =>1012,'municipio' => 'Tumaco', 'estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>1013,'municipio' => 'Tunja', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>1014,'municipio' => 'Tunungua', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>1015,'municipio' => 'Turbaco', 'estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>1016,'municipio' => 'Turbaná', 'estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>1017,'municipio' => 'Turbo', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>1018,'municipio' => 'Turmequé', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>1019,'municipio' => 'Tuta', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>1020,'municipio' => 'Tutasá', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>1021,'municipio' => 'Támara', 'estado' => 1,'departamento_id' =>85]);
            DB::table('city')->insert(['id' =>1022,'municipio' => 'Támesis', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>1023,'municipio' => 'Túquerres', 'estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>1024,'municipio' => 'Ubalá', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1025,'municipio' => 'Ubaque', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1026,'municipio' => 'Ubaté', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1027,'municipio' => 'Ulloa', 'estado' => 1,'departamento_id' =>76]);
            DB::table('city')->insert(['id' =>1028,'municipio' => 'Une', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1029,'municipio' => 'Unguía', 'estado' => 1,'departamento_id' =>27]);
            DB::table('city')->insert(['id' =>1030,'municipio' => 'Unión Panamericana (ÁNIMAS)', 'estado' => 1,'departamento_id' =>27]);
            DB::table('city')->insert(['id' =>1031,'municipio' => 'Uramita', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>1032,'municipio' => 'Uribe', 'estado' => 1,'departamento_id' =>50]);
            DB::table('city')->insert(['id' =>1033,'municipio' => 'Uribia', 'estado' => 1,'departamento_id' =>44]);
            DB::table('city')->insert(['id' =>1034,'municipio' => 'Urrao', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>1035,'municipio' => 'Urumita', 'estado' => 1,'departamento_id' =>44]);
            DB::table('city')->insert(['id' =>1036,'municipio' => 'Usiacuri', 'estado' => 1,'departamento_id' =>8]);
            DB::table('city')->insert(['id' =>1037,'municipio' => 'Valdivia', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>1038,'municipio' => 'Valencia', 'estado' => 1,'departamento_id' =>23]);
            DB::table('city')->insert(['id' =>1039,'municipio' => 'Valle de San José', 'estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>1040,'municipio' => 'Valle de San Juan', 'estado' => 1,'departamento_id' =>73]);
            DB::table('city')->insert(['id' =>1041,'municipio' => 'Valle del Guamuez', 'estado' => 1,'departamento_id' =>86]);
            DB::table('city')->insert(['id' =>1042,'municipio' => 'Valledupar', 'estado' => 1,'departamento_id' =>20]);
            DB::table('city')->insert(['id' =>1043,'municipio' => 'Valparaiso', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>1044,'municipio' => 'Valparaiso', 'estado' => 1,'departamento_id' =>18]);
            DB::table('city')->insert(['id' =>1045,'municipio' => 'Vegachí', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>1046,'municipio' => 'Venadillo', 'estado' => 1,'departamento_id' =>73]);
            DB::table('city')->insert(['id' =>1047,'municipio' => 'Venecia', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>1048,'municipio' => 'Venecia (Ospina Pérez)', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1049,'municipio' => 'Ventaquemada', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>1050,'municipio' => 'Vergara', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1051,'municipio' => 'Versalles', 'estado' => 1,'departamento_id' =>76]);
            DB::table('city')->insert(['id' =>1052,'municipio' => 'Vetas', 'estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>1053,'municipio' => 'Viani', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1054,'municipio' => 'Vigía del Fuerte', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>1055,'municipio' => 'Vijes', 'estado' => 1,'departamento_id' =>76]);
            DB::table('city')->insert(['id' =>1056,'municipio' => 'Villa Caro', 'estado' => 1,'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>1057,'municipio' => 'Villa Rica', 'estado' => 1,'departamento_id' =>19]);
            DB::table('city')->insert(['id' =>1058,'municipio' => 'Villa de Leiva', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>1059,'municipio' => 'Villa del Rosario', 'estado' => 1,'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>1060,'municipio' => 'Villagarzón', 'estado' => 1,'departamento_id' =>86]);
            DB::table('city')->insert(['id' =>1061,'municipio' => 'Villagómez', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1062,'municipio' => 'Villahermosa', 'estado' => 1,'departamento_id' =>73]);
            DB::table('city')->insert(['id' =>1063,'municipio' => 'Villamaría', 'estado' => 1,'departamento_id' =>17]);
            DB::table('city')->insert(['id' =>1064,'municipio' => 'Villanueva', 'estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>1065,'municipio' => 'Villanueva', 'estado' => 1,'departamento_id' =>44]);
            DB::table('city')->insert(['id' =>1066,'municipio' => 'Villanueva', 'estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>1067,'municipio' => 'Villanueva', 'estado' => 1,'departamento_id' =>85]);
            DB::table('city')->insert(['id' =>1068,'municipio' => 'Villapinzón', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1069,'municipio' => 'Villarrica', 'estado' => 1,'departamento_id' =>73]);
            DB::table('city')->insert(['id' =>1070,'municipio' => 'Villavicencio', 'estado' => 1,'departamento_id' =>50]);
            DB::table('city')->insert(['id' =>1071,'municipio' => 'Villavieja', 'estado' => 1,'departamento_id' =>41]);
            DB::table('city')->insert(['id' =>1072,'municipio' => 'Villeta', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1073,'municipio' => 'Viotá', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1074,'municipio' => 'Viracachá', 'estado' => 1,'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>1075,'municipio' => 'Vista Hermosa', 'estado' => 1,'departamento_id' =>50]);
            DB::table('city')->insert(['id' =>1076,'municipio' => 'Viterbo', 'estado' => 1,'departamento_id' =>17]);
            DB::table('city')->insert(['id' =>1077,'municipio' => 'Vélez', 'estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>1078,'municipio' => 'Yacopí', 'estado' => 1,'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1079,'municipio' => 'Yacuanquer', 'estado' => 1,'departamento_id' =>52]);
            DB::table('city')->insert(['id' =>1080,'municipio' => 'Yaguará', 'estado' => 1,'departamento_id' =>41]);
            DB::table('city')->insert(['id' =>1081,'municipio' => 'Yalí', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>1082,'municipio' => 'Yarumal', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>1083,'municipio' => 'Yolombó', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>1084,'municipio' => 'Yondó (Casabe)', 'estado' => 1,'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>1085,'municipio' => 'Yopal', 'estado' => 1,'departamento_id' =>85]);
            DB::table('city')->insert(['id' =>1086,'municipio' => 'Yotoco', 'estado' => 1,'departamento_id' =>76]);
            DB::table('city')->insert(['id' =>1087,'municipio' => 'Yumbo', 'estado' => 1,'departamento_id' =>76]);
            DB::table('city')->insert(['id' =>1088,'municipio' => 'Zambrano', 'estado' => 1,'departamento_id' =>13]);
            DB::table('city')->insert(['id' =>1089,'municipio' => 'Zapatoca', 'estado' => 1,'departamento_id' =>68]);
            DB::table('city')->insert(['id' =>1090,'municipio' => 'Zapayán (PUNTA DE PIEDRAS)', 'estado' => 1,'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>1091,'municipio' => 'Zaragoza','estado' => 1, 'departamento_id' =>5]);
            DB::table('city')->insert(['id' =>1092,'municipio' => 'Zarzal','estado' => 1, 'departamento_id' =>76]);
            DB::table('city')->insert(['id' =>1093,'municipio' => 'Zetaquirá','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>1094,'municipio' => 'Zipacón','estado' => 1, 'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1095,'municipio' => 'Zipaquirá','estado' => 1, 'departamento_id' =>25]);
            DB::table('city')->insert(['id' =>1096,'municipio' => 'Zona Bananera (PRADO - SEVILLA)','estado' => 1, 'departamento_id' =>47]);
            DB::table('city')->insert(['id' =>1097,'municipio' => 'Ábrego','estado' => 1, 'departamento_id' =>54]);
            DB::table('city')->insert(['id' =>1098,'municipio' => 'Íquira','estado' => 1, 'departamento_id' =>41]);
            DB::table('city')->insert(['id' =>1099,'municipio' => 'Úmbita','estado' => 1, 'departamento_id' =>15]);
            DB::table('city')->insert(['id' =>1100,'municipio' => 'Útica','estado' => 1, 'departamento_id' =>25]);


    }
}
