<?php

use Illuminate\Database\Seeder;

class ProductsInListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_in_list')->insert([
            'product_id' => '1',
            'android_user_id' => '1',
            'expiration_date' => '2020-10-10',
            'note' => 'Test',
          ]);
    }
}
