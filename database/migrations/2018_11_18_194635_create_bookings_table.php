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
            $table->enum('status', ['pending', 'confirmed', 'delayed', 'canceled', 'completed']);
            $table->string('from_address');
            $table->decimal('from_lat', 16, 14)->default(0);
            $table->decimal('from_lng', 16, 14)->default(0);
            $table->string('to_address');
            $table->decimal('to_lat', 16, 14)->default(0);
            $table->decimal('to_lng', 16, 14)->default(0);
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