<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBookingTimeField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('booking_date');
        });

        Schema::table('bookings', function (Blueprint $table) {
            $table->date('booking_date')->nullable()->after('phone');
        });

        //we may change this to time type field. 
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('booking_time')->length(10)->after('booking_date'); 
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dateTime('booking_date');
        });
        
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('booking_time');
        });
    }
}
