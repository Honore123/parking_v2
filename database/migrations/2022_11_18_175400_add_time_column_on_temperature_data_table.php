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
        Schema::table('temperature_data', function (Blueprint $table) {
            $table->time('recorded_at')->after('temperature_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temperature_data', function (Blueprint $table) {
            $table->dropColumn('recorded_at');
        });
    }
};
