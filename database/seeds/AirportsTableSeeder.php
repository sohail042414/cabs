<?php

use Illuminate\Database\Seeder;

class AirportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'name' => 'Heathrow Airport (LHR), Hounslow, Greater London, UK',
                'lat' => '51.470020',
                'lng' => '-0.454295'
            ),
            array(
                'name' => 'Birmingham Airport, Birmingham, West Midlands, UK',
                'lat' => '52.452381',
                'lng' => '-1.743507'
            ),
            array(
                'name' => 'Robin Hood Airport, Doncaster, South Yorkshire',
                'lat' => '53.480869',
                'lng' => '-1.010699'
            ),
            array(
                'name' => 'Ashford, Kent, UK',
                'lat' => '51.146465',
                'lng' => '0.875019'
            )
        );

        DB::table('airports')->insert($data);
    }
}
