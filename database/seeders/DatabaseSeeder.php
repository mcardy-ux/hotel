<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\User::create([
            'name' => 'Juan David Cardenas',
            'email' => 'juanchodavidcardenas@outlook.com',
            'password' => 'A.123456',
            ]
         );

         $this->call([
            CountrySeeder::class,
            DepartamentSeeder::class,
            CitySeeder::class
        ]);
    }
}
