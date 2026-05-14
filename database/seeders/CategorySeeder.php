<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Électronique', 'slug' => 'electronique', 'description' => 'Produits électroniques', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Vêtements', 'slug' => 'vetements', 'description' => 'Mode et accessoires', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Maison', 'slug' => 'maison', 'description' => 'Décoration et mobilier', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sports', 'slug' => 'sports', 'description' => 'Équipements sportifs', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Livres', 'slug' => 'livres', 'description' => 'Romans, BD, manuels', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}