<?php

use Illuminate\Database\Seeder;

class CarTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_types')->insert([
            'type' => 'standard',
            'title' => 'Standard',
            'description'=>'Standard sedan for a drive around the city at your service',
            'rate' => 2,
            'image'=>'tariff-1.png'
        ]);

        DB::table('car_types')->insert([
            'type' => 'business',
            'title' => 'Business',
            'description'=>'Business sedan for a drive around the city at your service',
            'rate' => 2,
            'image'=>'tariff-2.png'
        ]);

        DB::table('car_types')->insert([
            'type' => 'vip',
            'title' => 'VIP',
            'description'=>'VIP sedan for a drive around the city at your service',
            'rate' => 2,  
            'image'=>'tariff-3.png'          
        ]);

        DB::table('car_types')->insert([
            'type' => 'van',
            'title' => 'Mini Van',
            'description'=>'Mini Van sedan for a drive around the city at your service',
            'rate' => 2,
            'image'=>'tariff-4.png'
        ]);
    }
}