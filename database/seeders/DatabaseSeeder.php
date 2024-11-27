<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Apprenant;
use App\Models\Referentiel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {     
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(PromoSeeder::class);
        // $this->call(ReferentielSeeder::class);
        
        // Apprenant::factory(10)->create();
    }
}
