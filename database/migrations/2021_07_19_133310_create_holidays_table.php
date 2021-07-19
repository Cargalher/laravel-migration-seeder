<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
/*
place
hotel_name
date
image_url
children
pets
all_inclusive

*/
class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->string('place');
            $table->string('hotel_name');
            $table->string('date');
            $table->string('image_url');
            $table->boolean('children');
            $table->boolean('pets');
            $table->boolean('all_inclusive');
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
        Schema::dropIfExists('holidays');
    }
}
