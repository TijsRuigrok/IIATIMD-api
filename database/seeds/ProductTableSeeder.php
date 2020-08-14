<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
          'naam' => 'Banaan',
          'barcode' => '8711400408540',
          'soort' => 'Groente en Fruit',
          'houdbaarheidsdatum' => '2020-08-10',
          'notitie' => 'Bananen zijn lekker.',
          'gebruiker_email' => 'TijsRuigrok15@gmail.com',
        ]);

    }
}
