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
        Schema::table('activity_categories', function (Blueprint $table) {
            $table->string('keywords')->after('name')->nullable();
            $table->longtext('images')->after('keywords')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activity_categories', function (Blueprint $table) {
            $table->dropColumn('keywords');
            $table->dropColumn("images");
        });
    }
};
