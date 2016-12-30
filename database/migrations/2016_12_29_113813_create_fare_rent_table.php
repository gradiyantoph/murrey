<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFareRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fare_rent', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fare_id')->unsigned();
            $table->integer('rent_id')->unsigned();
            $table->integer('length')->comment('length in minute');
            $table->integer('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fare_rent');
    }
}
