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
            'product_barcode' => '8711400408540',
            'android_user_email' => 'TijsRuigrok15@gmail.com',
            'expiration_date' => '2020-10-10',
            'note' => 'Test',
        ]);
    }
}
