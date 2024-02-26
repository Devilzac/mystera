<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainCharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {       
        \App\Models\MainCharacters::factory(50)->create();
    }
}
