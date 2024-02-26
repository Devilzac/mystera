<?php

namespace Database\Seeders;

use App\Models\Alt;
use App\Models\MainCharacters;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AltSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //        
        \App\Models\Alt::factory(50)->create();
         // Get all the roles attaching up to 3 random roles to each user
         $alts = Alt::all();

         // Populate the pivot table
         MainCharacters::all()->each(function ($main) use ($alts) {
             //dd($main->alt_character());
             $main->alt()->attach(
                 $alts->random(rand(1, 3))->pluck('id')->toArray()
             );
         });
    }
}
