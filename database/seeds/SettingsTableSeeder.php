<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     /*
        'settings' => [
        'phone' => '073-9582-3243',
        'email' => 'taxiservice@gmail.com',
        'skype' => 'uk_cab',
        'twitter' => '@uk_cab',
        'pintrust' => '',
        'address' => '43 2-nd Avenue, London, 29004-7153 ',
        'records_per_page' => 5,
        'manager_email' => 'uktaximanager@gmail.com',
        'extra_email' => 'naumankhan051@gmail.com'
    ],
     */
    public function run()
    {
        $data = array(
            array(
                'title' => 'Contact Us Email',
                'key' => 'contact_us_email',
                'value' => 'taxiservice@gmail.com'
            ),
            array(
                'title' => 'Phone',
                'key' => 'phone',
                'value' => '073-9582-3243'
            ),
            array(
                'title' => 'Skype',
                'key' => 'skype',
                'value' => 'uk_cab'
            ),
            array(
                'title' => 'Twitter',
                'key' => 'twitter',
                'value' => '@uk_cab'
            ),
            array(
                'title' => 'Address',
                'key' => 'address',
                'value' => '43 2-nd Avenue, London, 29004-7153 ',
            ),
            array(
                'title' => 'Email (Send Emails From)',
                'key' => 'email_from',
                'value' => 'uktaximanager@gmail.com',
            ),
            array(
                'title' => 'Email (Reply to, bookings etc.)',
                'key' => 'email_reply_to',
                'value' => 'uktaximanager@gmail.com',
            ),
            array(
                'title' => 'Records per page Admin',
                'key' => 'admin_records_per_page',
                'value' => '10',
            ),
            array(
                'title' => 'Records per page Front end',
                'key' => 'front_records_per_page',
                'value' => '10',
            ),
            array(
                'title' => 'Currency symbol ',
                'key' => 'currency_symbol',
                'value' => '£',
            ),
            array(
                'title' => 'Distance Unit (k:kilometers,mi:miles)',
                'key' => 'distance_unit',
                'value' => 'mi',
            ),
            array(
                'title' => 'Google API Key',
                'key' => 'google_api_key',
                'value' => 'AIzaSyB07oKE_GD9xHgPEHrielmn1__vD3OsaYs',
            ),
        );

        DB::table('settings')->insert($data);
    }
}
