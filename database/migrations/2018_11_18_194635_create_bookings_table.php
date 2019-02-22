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
            //$table->string('booking_id')->length(16);
            $table->integer('user_id')->default(0);
            $table->integer('driver_id')->default(0);
            $table->integer('cab_id')->default(0);
            $table->integer('airport_id')->default(0);
            $table->enum('car_type', ['standard', 'business', 'vip', 'van', 'bus']);
            $table->enum('type', ['from_airport', 'to_airport', 'standard'])->default('standard');
            $table->enum('mode', ['one_way', 'two_way'])->default('one_way');
            $table->enum('status', ['pending', 'confirmed', 'delayed', 'canceled', 'completed']);
            $table->string('from_address');
            $table->decimal('from_lat', 18, 14)->default(0);
            $table->decimal('from_lng', 18, 14)->default(0);
            $table->string('to_address');
            $table->decimal('to_lat', 18, 14)->default(0);
            $table->decimal('to_lng', 18, 14)->default(0);
            $table->string('email');
            $table->smallInteger('passangers')->default(2);
            $table->boolean('terminal_pickup')->default(true);
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