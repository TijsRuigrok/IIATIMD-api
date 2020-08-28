<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          'name' => 'Melkkan Verse Volle Melk',
          'barcode' => '8710624283926',
        ]);

        DB::table('products')->insert([
            'name' => 'Zaanse Hoeve Kaas Jong Belegen',
            'barcode' => '2389281506532',
        ]);

    }
}
