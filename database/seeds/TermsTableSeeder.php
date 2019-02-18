<?php

use Illuminate\Database\Seeder;

class TermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array(
            array(
                'sort_order' => 1,
                'title' => "Our Terms and Conditions",
                'text' => "You will automatically receive an 'OTS Journey Acknowledgement' email for the journey(s) you have paid for. You are responsible for checking that the details received to us are correct. You will manually receive a 'Journey Details' email when the journey has been assigned to a driver. This will contain the pick up instructions and the driver's telephone number. Onward Travel Solutions Ltd will not refund you if you have forgotten to take this with you. Onward Travel Solutions Ltd does not accept any responsibility in any way for missed flights for whatever reason i.e. traffic delays, accidents, breakdowns, severe weather conditions or any unforeseen circumstances. We advise passengers to plan to arrive at the airport 2 hours prior to flight departure to allow for possible unpredicted delays en route to or from the airport. Onward Travel Solutions Ltd will not take responsibility for any passengers missing their flight if two hours check in time was not allowed."
            ),
            array(
                'sort_order' => 2,
                'title' => "Policy",
                'text' => "You will automatically receive an 'OTS Journey Acknowledgement' email for the journey(s) you have paid for. You are responsible for checking that the details received to us are correct. You will manually receive a 'Journey Details' email when the journey has been assigned to a driver. This will contain the pick up instructions and the driver's telephone number. Onward Travel Solutions Ltd will not refund you if you have forgotten to take this with you. Onward Travel Solutions Ltd does not accept any responsibility in any way for missed flights for whatever reason i.e. traffic delays, accidents, breakdowns, severe weather conditions or any unforeseen circumstances. We advise passengers to plan to arrive at the airport 2 hours prior to flight departure to allow for possible unpredicted delays en route to or from the airport. Onward Travel Solutions Ltd will not take responsibility for any passengers missing their flight if two hours check in time was not allowed."
            ),
            array(
                'sort_order' => 3,
                'title' => "How we operate",
                'text' => "You will automatically receive an 'OTS Journey Acknowledgement' email for the journey(s) you have paid for. You are responsible for checking that the details received to us are correct. You will manually receive a 'Journey Details' email when the journey has been assigned to a driver. This will contain the pick up instructions and the driver's telephone number. Onward Travel Solutions Ltd will not refund you if you have forgotten to take this with you.Onward Travel Solutions Ltd does not accept any responsibility in any way for missed flights for whatever reason i.e. traffic delays, accidents, breakdowns, severe weather conditions or any unforeseen circumstances. We advise passengers to plan to arrive at the airport 2 hours prior to flight departure to allow for possible unpredicted delays en route to or from the airport. Onward Travel Solutions Ltd will not take responsibility for any passengers missing their flight if two hours check in time was not allowed. You are free of course to arrange to get to the airport for a time of less than 2 hours prior to flight departure, however Onward Travel Solutions Ltd accepts no responsibility for any missed flight due to this."
            ),
        );

        DB::table('terms')->insert($data);
    }
}
