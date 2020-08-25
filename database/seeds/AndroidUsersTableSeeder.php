<?php

use Illuminate\Database\Seeder;

class AndroidUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('android_users')->insert([
          'name' => 'Tijs',
          'email' => 'TijsRuigrok15@gmail.com',
          'password' => '123',
        ]);
    }
}
