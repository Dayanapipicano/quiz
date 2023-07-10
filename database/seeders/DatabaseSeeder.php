<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\compania;

use App\Models\cuartel;
use App\Models\cuerpoE;
use App\Models\servicio;
use App\Models\soldado;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        servicio::factory(50)->create();
        soldado::factory(50)->create();
        cuerpoE::factory(50)->create();
        cuartel::factory(50)->create();
        compania::factory(50)->create();
       
      
    }
}
