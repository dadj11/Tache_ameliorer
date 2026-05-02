<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
            DB::table('taches')->insert([
            [
                'titre' => 'Réunion Client',
                'description' => 'Discussion sur le nouveau design du site.',
                'date' => '2023-10-25',
                'heur' => '14:00:00',
                'duree' => '01:30:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Sport',
                'description' => 'Séance de cardio en salle.',
                'date' => '2023-10-26',
                'heur' => '18:00:00',
                'duree' => '01:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
