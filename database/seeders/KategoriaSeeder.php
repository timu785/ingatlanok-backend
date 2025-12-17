<?php

namespace Database\Seeders;

use App\Models\Kategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategoria::create(['kategoria_nev' => 'ház']);
        Kategoria::create(['kategoria_nev' => 'lakás']);
        Kategoria::create(['kategoria_nev' => 'építési telek']);
        Kategoria::create(['kategoria_nev' => 'garázs']);
        Kategoria::create(['kategoria_nev' => 'mezőgazdasági épület']);
        Kategoria::create(['kategoria_nev' => 'ipari ingatlan']);
    }
}
