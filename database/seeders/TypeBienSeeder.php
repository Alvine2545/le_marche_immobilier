<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class TypeBienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Villa, terrain, appartement meublé, maison locative, duplex, demeure de charme, local, studio, Notariale
        DB::table('type_biens')->insert([
            'libelle' => 'Villa',
        ]);
        DB::table('type_biens')->insert([
            'libelle' => 'Terrain',
        ]);
        DB::table('type_biens')->insert([
            'libelle' => 'Appartement',
        ]);
        DB::table('type_biens')->insert([
            'libelle' => 'Meublé',
        ]);
        DB::table('type_biens')->insert([
            'libelle' => 'Maison locative',
        ]);
        DB::table('type_biens')->insert([
            'libelle' => 'Duplex',
        ]);
        DB::table('type_biens')->insert([
            'libelle' => 'Demeure de charme',
        ]);
        DB::table('type_biens')->insert([
            'libelle' => 'Local',
        ]);
        DB::table('type_biens')->insert([
            'libelle' => 'Studio',
        ]);
        DB::table('type_biens')->insert([
            'libelle' => 'Notariale',
        ]);
    }
}
