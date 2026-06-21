<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        // Exemple d'insertion de plusieurs notes fictives
        DB::table('notes')->insert([
            [
                'titre' => 'Réunion d\'équipe',
                'contenu' => 'Discuter de la progression du projet Laravel.',
                'date' => Carbon::now()->format('Y-m-d'),
                'heur' => Carbon::now()->format('H:i:s'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Liste de courses',
                'contenu' => 'Acheter du café, du lait et des œufs.',
                'date' => '2026-05-15',
                'heur' => '10:30:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Idée de génie',
                'contenu' => 'Créer une application qui révolutionne le rangement des chaussettes.',
                'date' => '2026-06-01',
                'heur' => '14:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
