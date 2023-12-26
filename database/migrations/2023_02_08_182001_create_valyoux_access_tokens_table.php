<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValyouxAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valyoux_access_tokens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('from_user_id');
            $table->integer('to_user_id');
            $table->string('access_tokens');
            $table->string('access_tokens_current_value')->nullable();
            $table->string('access_tokens_burnt')->nullable();
            $table->string('access_token_remaining')->nullable();
            $table->string('access_tokens_required')->nullable();
            $table->text('desc');
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
        Schema::dropIfExists('valyoux_access_tokens');
    }
}
