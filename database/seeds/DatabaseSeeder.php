<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AndroidUsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        //$this->call(ProductsInListTableSeeder::class);
    }
}
