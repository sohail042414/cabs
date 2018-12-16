<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'RAPID CITY TRANSFER',
            'short_description' => 'We will bring you quickly and comfortably to anywhere in your city',
            'description' => 'We will bring you quickly and comfortably to anywhere in your cityWe will bring you quickly and comfortably to anywhere in your cityWe will bring you quickly and comfortably to anywhere in your cityWe will bring you quickly and comfortably to anywhere in your city',
            'image' => 'services-1.png'
        ]);

        DB::table('services')->insert([
            'title' => 'BOOKING A HOTEL',
            'short_description' => 'If you need a comfortable hotel, our operators will book it for you, and take a taxi to the address',
            'description' => ' If you need a comfortable hotel, our operators will book it for you, and take a taxi to the address We will bring you quickly and comfortably to anywhere in your cityWe will bring you quickly and comfortably to anywhere in your cityWe will bring you quickly and comfortably to anywhere in your cityWe will bring you quickly and comfortably to anywhere in your city',
            'image' => 'services-2.png'
        ]);

        DB::table('services')->insert([
            'title' => 'AIRPORT TRANSFER',
            'short_description' => 'We will bring you quickly and comfortably to anywhere in your city',
            'description' => 'We will bring you quickly and comfortably to anywhere in your city We will bring you quickly and comfortably to anywhere in your city We will bring you quickly and comfortably to anywhere in your city',
            'image' => 'services-3.png'
        ]);

        DB::table('services')->insert([
            'title' => 'BAGGAGE TRANSPORT',
            'short_description' => 'If you need a comfortable hotel, our operators will book it for you, and take a taxi to the address',
            'description' => 'If you need a comfortable hotel, our operators will book it for you, and take a taxi to the address',
            'image' => 'services-4.png'
        ]);
    }
}
