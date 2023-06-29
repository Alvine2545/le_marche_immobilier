<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaracteristiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('caracteristiques')->insert([
            'nom' => 'reference',
            'type' => 'STRING',
            'description' => 'Désignation du bien',
            'showC' => false,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'photo',
            'type' => 'STRING',
            'description' => 'Désignation du bien',
            'showC' => false,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'imagemain',
            'type' => 'STRING',
            'description' => 'Désignation du bien',
            'showC' => false,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'surface_totale',
            'type' => 'STRING',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'surface_habitable',
            'type' => 'STRING',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'prix_min',
            'type' => 'STRING',
            'description' => 'Désignation du bien',
            'showC' => false,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'departement',
            'type' => 'STRING',
            'description' => 'Désignation du bien',
            'showC' => false,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'ville',
            'type' => 'STRING',
            'description' => 'Désignation du bien',
            'showC' => false,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'prix_max',
            'type' => 'STRING',
            'description' => 'Désignation du bien',
            'showC' => false,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'adresse',
            'type' => 'STRING',
            'description' => 'Désignation du bien',
            'showC' => false,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'document_complementaire',
            'type' => 'BOOLEAN',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'prix_nuit',
            'type' => 'STRING',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'status',
            'type' => 'BOOLEAN',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'wc',
            'type' => 'BOOLEAN',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'nbre_piece',
            'type' => 'INTEGER',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'chambre_a_coucher',
            'type' => 'INTEGER',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'salle_bain',
            'type' => 'INTEGER',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'parking',
            'type' => 'BOOLEAN',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'piscine',
            'type' => 'BOOLEAN',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'jardin',
            'type' => 'BOOLEAN',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'climatiseur',
            'type' => 'BOOLEAN',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'gaz',
            'type' => 'BOOLEAN',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'chauffage',
            'type' => 'BOOLEAN',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'internet',
            'type' => 'BOOLEAN',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'surveillance',
            'type' => 'BOOLEAN',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'plage',
            'type' => 'BOOLEAN',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'premium',
            'type' => 'BOOLEAN',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);
        DB::table('caracteristiques')->insert([
            'nom' => 'autres',
            'type' => 'TEXT',
            'description' => 'Désignation du bien',
            'showC' => true,
        ]);

    }
}
