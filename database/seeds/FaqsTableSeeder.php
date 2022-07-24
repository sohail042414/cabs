<?php

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
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
                'sort_order' => 1,
                'question' => 'HOW DO I MAKE A BOOKING?',
                'answer' => 'Via telephone or preferably through our "Instant Online Quote" booking engine.'
            ),
            array(
                'sort_order' => 2,
                'question' => 'WHEN WILL I RECEIVE CONFIRMATION OF MY BOOKING?',
                'answer' => "You will receive a welcome email containing your login password on your first booking with us. You will automatically receive an ' OTS Journey Acknowledgement ' email for the journey(s) you have made. You will manually receive a ' Journey Details ' email when the journey has been assigned to a driver. This will contain the pick up instructions and the driver's telephone number."
            ),
            array(
                'sort_order' => 3,
                'question' => 'WHEN WILL RECEIVE MY SALES RECEIPT?',
                'answer' => 'Your Sales receipt will automatically be sent to you on the evening of the transfer.'
            ),
            array(
                'sort_order' => 4,
                'question' => 'HOW DO I FIND MY DRIVER FROM AN AIRPORT, PORT OR STATION?',
                'answer' => "The pick up instructions will be contained in the ' Journey Details ' email."
            ),
            array(
                'sort_order' => 5,
                'question' => "WHAT IS A ' MEET and GREET ' SERVICE?",
                'answer' => "A 'Meet and Greet' service is whereby the driver will park his vehicle and meet you with a name board in the appropriate place i.e an Arrivals Hall."
            ),
            array(
                'sort_order' => 6,
                'question' => "WILL I INCUR ANY EXTRA CHARGES IF MY PLANE IS DELAYED?",
                'answer' => "No, we will track your plane's progress when it is in the air."
            ),
            array(
                'sort_order' => 7,
                'question' => "IS YOUR COMPANY LICENSED AND FULLY INSURED?",
                'answer' => "Yes, We are fully licensed. All our vehicles are also insured."
            ),
            array(
                'sort_order' => 8,
                'question' => "WHAT DO I DO IF I DON'T KNOW THE POSTCODE?",
                'answer' => "Enter all the details you do have and we will try and find the postcode and email you back a quotation as soon as possible."
            ),
            array(
                'sort_order' => 9,
                'question' => "WHAT HAPPENS IF I HAVEN'T RECEIVED CONFIRMATION AND MY TRANSFER IS IMMINENT?",
                'answer' => "Please call 01934 744 171 and we will deal with your booking as quickly as possible."
            ),
            array(
                'sort_order' => 10,
                'question' => "WILL YOU MEET US ANYTIME OF DAY OR NIGHT?",
                'answer' => "Yes, as all bookings are pre booked we can provide a 24hr service."
            ),
            array(
                'sort_order' => 11,
                'question' => "CAN I SMOKE IN THE CAR?",
                'answer' => "No. OTS Ltd operates a strict non smoking policy in all their vehicles."
            )
        );

        DB::table('faqs')->insert($data);
    }
}
