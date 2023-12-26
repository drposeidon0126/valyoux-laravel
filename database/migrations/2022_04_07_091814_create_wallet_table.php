<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet', function (Blueprint $table) {
            $table->integer('id', true);
            $table->tinyInteger('type')->default(0)->comment('0-sendmoney,1-video,2-sell,3-buy,4-valyou song,5-promote song');
            $table->tinyInteger('user_role')->default(1);
            $table->integer('from_user_id');
            $table->integer('to_user_id');
            $table->integer('artist_id')->nullable();
            $table->string('token', 50);
            $table->string('amount', 50);
            $table->decimal('admin_cost', 10, 0)->nullable();
            $table->string('note', 255)->nullable();
            $table->integer('video_id')->nullable();
            $table->tinyInteger('vip_status')->default(0);
            $table->dateTime('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallet');
    }
}
