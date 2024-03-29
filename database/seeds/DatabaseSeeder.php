<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CarTypesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(TermsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(AirportsTableSeeder::class);
    }
}
