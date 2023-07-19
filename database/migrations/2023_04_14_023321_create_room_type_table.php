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
        Schema::create('room_type', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->decimal('room_area',5,2);
            $table->foreignId('property_id')->constrained('properties','id')->onDelete('cascade');
            $table->integer('maximum_adult');
            $table->integer('maximum_child');
            $table->decimal('price_per_night',20,2);
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
        Schema::dropIfExists('room_type');
    }
};
