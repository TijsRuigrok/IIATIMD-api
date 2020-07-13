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
          'soort' => 'Groente en Fruit'
        ]);

        DB::table('product')->insert([
          'naam' => 'Vissticks',
          'barcode' => '8711400408541',
          'soort' => 'Vlees, Vis en Vega'
        ]);

        DB::table('product')->insert([
          'naam' => 'Volle Melk',
          'barcode' => '8711400408542',
          'soort' => 'Boter, Eieren, Zuivel en Kaas'
        ]);

        DB::table('product')->insert([
          'naam' => 'Tompoes',
          'barcode' => '8711400408543',
          'soort' => 'Brood en Gebak'
        ]);

        DB::table('product')->insert([
          'naam' => 'Coca Cola',
          'barcode' => '8711400408544',
          'soort' => 'Drinken'
        ]);

        DB::table('product')->insert([
          'naam' => 'Heineken Pils',
          'barcode' => '8711400408545',
          'soort' => 'Drank'
        ]);

        DB::table('product')->insert([
          'naam' => 'Lays Naturel Chips',
          'barcode' => '8711400408546',
          'soort' => 'Snacks'
        ]);

        DB::table('product')->insert([
          'naam' => 'Nivea Deoderant',
          'barcode' => '8711400408547',
          'soort' => 'Overig'
        ]);
    }
}
