<?php

use Illuminate\Database\Seeder;

class SoortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soort')->insert([
          'naam' => 'Groente en Fruit'
        ]);

        DB::table('soort')->insert([
          'naam' => 'Vlees, Vis en Vega'
        ]);

        DB::table('soort')->insert([
          'naam' => 'Boter, Eieren, Zuivel en Kaas'
        ]);

        DB::table('soort')->insert([
          'naam' => 'Brood en Gebak'
        ]);

        DB::table('soort')->insert([
          'naam' => 'Drinken'
        ]);

        DB::table('soort')->insert([
          'naam' => 'Drank'
        ]);

        DB::table('soort')->insert([
          'naam' => 'Snacks'
        ]);

        DB::table('soort')->insert([
          'naam' => 'Overig'
        ]);
    }
}
