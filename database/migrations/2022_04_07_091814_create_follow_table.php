<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_role')->comment('1-admin,2-Artist,3-investor,4-Business');
            $table->integer('follower_id')->comment('login user id');
            $table->integer('following_id');
            $table->integer('request_status')->default(1)->comment('0-request,1-confirm,2-cancel');
            $table->integer('artist_id')->nullable()->comment('2-user role');
            $table->integer('business_id')->nullable()->comment('4-User role');
            $table->integer('investor_id')->nullable()->comment('3-user role');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follow');
    }
}
