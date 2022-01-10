<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->id();
            $table->string('destination_places', 255);
            $table->dateTime('start_date', 0);
            $table->dateTime('end_date', 0);
            $table->decimal('price', 8, 2);
            $table->boolean('flight');
            $table->dateTime('flight_start_date', 0)->nullable();
            $table->dateTime('flight_end_date', 0)->nullable();
            $table->string('board_description', 255);
            $table->text('informations');
            $table->text('extras');
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
        Schema::dropIfExists('travel_packages');
    }
}
