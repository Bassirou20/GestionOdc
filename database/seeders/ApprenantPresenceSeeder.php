<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApprenantPresenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $aujourdhui = Carbon::now()->format('Y-m-d');
        $presences = DB::table('presences')->whereDate('date_heure_arriver', $aujourdhui)->get();

        foreach ($presences as $presence) {
            $apprenantId = rand(20, 80);

            DB::table('apprenant_presence')->insert([
                'apprenant_id' => $apprenantId,
                'presence_id' => $presence->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
