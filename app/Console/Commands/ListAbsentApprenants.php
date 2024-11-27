<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Absence;
use App\Models\Apprenant;

class ListeApprenantsAbsents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'apprenants:absents';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Affiche la liste des apprenants absents';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $absences = Absence::where('justifier', false)
            ->with('apprenant')
            ->get();

        $apprenantsAbsents = $absences->pluck('apprenant')->unique();

        $headers = ['ID', 'Nom', 'Prénom'];

        $data = [];

        foreach ($apprenantsAbsents as $apprenant) {
            $data[] = [
                'ID' => $apprenant->id,
                'Nom' => $apprenant->nom,
                'Prénom' => $apprenant->prenom,
            ];
        }

        $this->table($headers, $data);
    }
}
