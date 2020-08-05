<?php

use Illuminate\Database\Seeder;

class GebruikerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gebruiker')->insert([
          'naam' => 'Tijs',
          'email' => 'TijsRuigrok15@gmail.com',
          'wachtwoord' => '123',
        ]);
    }
}
