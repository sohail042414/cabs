<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car_type');
            $table->string('from_address');
            $table->string('to_address');
            $table->string('phone');
            $table->dateTime('booking_date');
            $table->decimal('distance', 8, 2)->default(0);
            $table->decimal('rate', 8, 2)->default(0);
            $table->decimal('amount', 8, 2)->default(0);
            $table->decimal('discount', 8, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}