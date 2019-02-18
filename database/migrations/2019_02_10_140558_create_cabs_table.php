<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('cabs', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['standard', 'business', 'vip', 'van', 'bus'])->default('standard');
            $table->enum('status', ['free', 'booked', 'suspened'])->default('free');
            $table->integer('driver_id');
            $table->string('reg_number')->length(20);
            $table->string('name')->length(50)->nullable();
            $table->string('model')->length(50)->nullable();
            $table->string('brand')->length(30)->nullable();
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
        Schema::dropIfExists('cabs');
    }
}
