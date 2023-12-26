<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('audio_streaming_fee', 50)->nullable()->default(0);
            $table->string('video_streaming_fee', 50)->nullable()->default(0);
            $table->string('admin_video_streaming_fee', 50)->nullable()->default(0);
            $table->string('admin_audio_streaming_fee', 50)->nullable()->default(0);
            $table->string('advertisement_fee', 50)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
}
