<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_videos', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type')->nullable()->comment('1-audio,2-video');
            $table->integer('user_id')->nullable();
            $table->integer('artist_id')->nullable();
            $table->string('name', 255);
            $table->string('audio_cover_image', 255)->nullable();
            $table->string('audio_title', 100)->nullable();
            $table->string('singer', 255)->nullable();
            $table->string('music_by', 255)->nullable();
            $table->string('starcast', 255)->nullable();
            $table->text('description')->nullable();
            $table->integer('video_id')->nullable();
            $table->tinyInteger('share')->nullable()->default(0)->comment('1-share');
            $table->string('copyright', 50)->nullable();
            $table->string('copyright_text', 100)->nullable();
            $table->string('earning_user', 100)->nullable();
            $table->string('invite_email', 100)->nullable();
            $table->integer('status')->default(1);
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upload_videos');
    }
}
