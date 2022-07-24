<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBookingOriginFlight extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('flight_no')->nullable()->length(30)->after('to_lng');
            $table->string('origin')->nullable()->length(50)->after('to_lng');            
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
            $table->dropColumn('origin');
            $table->dropColumn('flight_no');
        });
        
    }
}
