<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('notification_type')->comment('1- Admin sent money 2- Play video 3. Buy Stocks 4. Sell Stocks,5-valyou song');
            $table->integer('from_user_id');
            $table->integer('to_user_id');
            $table->integer('artist_id')->nullable();
            $table->text('notification_text');
            $table->tinyInteger('status')->default(0)->comment('0=unread, 1=read');
            $table->dateTime('created_at');
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
        Schema::dropIfExists('notifications');
    }
}
