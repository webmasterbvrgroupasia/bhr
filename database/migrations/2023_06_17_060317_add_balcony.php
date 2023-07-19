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
        Schema::table('properties', function (Blueprint $table) {
            $table->boolean('air_conditioning')->nullable()->after('property_status');
            $table->boolean('balcony')->nullable();
            $table->boolean('tv')->nullable();
            $table->boolean('electric_kettle')->nullable();
            $table->boolean('clothes_rack')->nullable();
            $table->boolean('hair_dryer')->nullable();
            $table->boolean('private_entrance')->nullable();
            $table->boolean('safety_box')->nullable();
            $table->boolean('desk')->nullable();
            $table->boolean('socket')->nullable();
            $table->boolean('private_bathroom')->nullable();
            $table->boolean('toilet_paper')->nullable();
            $table->boolean('shower')->nullable();
            $table->boolean('bathtub')->nullable();
            $table->boolean('slipper')->nullable();
            $table->boolean('toileteries')->nullable();
            $table->boolean('minibar')->nullable();
            $table->boolean('refrigerator')->nullable();
            $table->boolean('tea_coffee_maker')->nullable();
            $table->boolean('smoke_alarm')->nullable();
            $table->boolean('fire_extinguisher')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            //      dropColumntable->boolean('air_conditioning')->nullable()->after('property_status');
            $table->dropColumn('tv')->nullable();
            $table->dropColumn('balcony')->nullable();
            $table->dropColumn('electric_kettle')->nullable();
            $table->dropColumn('clothes_rack')->nullable();
            $table->dropColumn('hair_dryer')->nullable();
            $table->dropColumn('private_entrance')->nullable();
            $table->dropColumn('safety_box')->nullable();
            $table->dropColumn('desk')->nullable();
            $table->dropColumn('socket')->nullable();
            $table->dropColumn('private_bathroom')->nullable();
            $table->dropColumn('toilet_paper')->nullable();
            $table->dropColumn('shower')->nullable();
            $table->dropColumn('bathtub')->nullable();
            $table->dropColumn('slipper')->nullable();
            $table->dropColumn('toileteries')->nullable();
            $table->dropColumn('minibar')->nullable();
            $table->dropColumn('refrigerator')->nullable();
            $table->dropColumn('tea_coffee_maker')->nullable();
            $table->dropColumn('smoke_alarm')->nullable();
            $table->dropColumn('fire_extinguisher')->nullable();
        });
    }
};
