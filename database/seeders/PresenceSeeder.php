<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PresenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $date = Carbon::now();

        for ($i = 0; $i < 10; $i++) {
            $dateArrivee = $date->subMinutes(rand(1, 60 * 24));
            DB::table('presences')->insert([
                'date_heure_arriver' => $dateArrivee,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
