<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tacheId = DB::table('taches')->first()->id;

        DB::table('notes')->insert([
            [   'date' => '2023-10-26',
                'contenu' => 'Penser à prendre les dossiers rouges.',
                'tache_id' => $tacheId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [   'date' => '2023-10-27',
                'contenu' => 'Vérifier la disponibilité de la salle de réunion.',
                'tache_id' => $tacheId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
