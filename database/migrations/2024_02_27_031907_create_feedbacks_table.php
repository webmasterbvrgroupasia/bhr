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
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email_address');
            $table->string('phone_number');
            $table->string('nationality');
            $table->string('unit');
            $table->string('room')->nullable();
            $table->string('first_time');
            $table->string('reference');
            $table->string('reservation_rating');
            $table->string('cleanliness');
            $table->string('housekeeping');
            $table->string('staff_friendliness');
            $table->string('staff_competence');
            $table->string('service_quality');
            $table->string('ambience');
            $table->string('location');
            $table->string('general_review');
            $table->string('quality_and_price');
            $table->string('unit_service');
            $table->string('consideration');
            $table->string('recommendation');
            $table->string('employee_who_made_stay_more_pleasurable');
            $table->string('review_writings');
            $table->string('subscribe_to_newsletter');
            $table->softDeletes();
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
        Schema::dropIfExists('feedbacks');
    }
};
