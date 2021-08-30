<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::create([
            'name' => 'Juan David Cardenas',
            'email' => 'root@admin.com',
            'password' => Hash::make('A.123456'),
            ]
         );

         $this->call([
            CountrySeeder::class,
            DepartamentSeeder::class,
            CitySeeder::class,
            CiiuSeeder::class
        ]);
    }
}
