<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'type' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('taxi24'),
        ]);

        DB::table('users')->insert([
            'name' => 'Driver',
            'type' => 'driver',
            'email' => 'driver@gmail.com',
            'password' => bcrypt('taxi24'),
        ]);

        DB::table('users')->insert([
            'name' => 'Customer',
            'type' => 'customer',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('taxi24'),
        ]);
    }
}