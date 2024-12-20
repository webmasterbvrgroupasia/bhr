<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id('id');
            $table->string('name',255);
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->string('slug');
            $table->string('booking_link');
            $table->string('images',1000);
            $table->longText('description');
            $table->boolean('pool');
            $table->boolean('bar');
            $table->boolean('sauna');
            $table->boolean('garden');
            $table->boolean('non_smoking_room');
            $table->boolean('family_room');
            $table->boolean('hot_tub');
            $table->boolean('jacuzzi');
            $table->boolean('air_conditioner');
            $table->tinyInteger('property_status');
            $table->boolean('balcony');
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
        Schema::dropIfExists('properties');
    }
};
