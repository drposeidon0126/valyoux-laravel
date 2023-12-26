<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->tinyInteger('primary_artist')->default(0);
            $table->boolean('category')->nullable()->default(false)->comment('0=EOI Profile , 1=Upcoming, 2=professional, 3=Major Artist');
            $table->string('brand', 255)->nullable();
            $table->text('about')->nullable();
            $table->text('artist_about')->nullable();
            $table->string('country', 10)->nullable();
            $table->string('website', 255)->nullable();
            $table->string('spotify', 255)->nullable();
            $table->string('soundcloud', 255)->nullable();
            $table->string('applemusic', 255)->nullable();
            $table->string('youtube', 255)->nullable();
            $table->string('facebook', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('photo', 255)->nullable();
            $table->float('stock_value', 10, 0)->nullable();
            $table->float('market_value', 10, 0)->nullable();
            $table->float('dividend_payments', 10, 0)->nullable();
            $table->float('change_stock', 10, 0)->nullable()->default(0);
            $table->float('change_market', 10, 0)->nullable()->default(0);
            $table->float('current_price', 10, 0)->nullable()->default(0);
            $table->integer('total_supply')->nullable()->default(0);
            $table->float('circulating_supply', 10, 0)->nullable()->default(0);
            $table->double('artist')->nullable()->default(0);
            $table->double('music_fan_investor')->nullable()->default(0);
            $table->integer('sell_restrictions')->nullable()->default(0);
            $table->float('market_maker_price', 10, 0)->nullable()->default(0);
            $table->float('sell_limit', 10, 0)->nullable()->default(0);
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
        Schema::dropIfExists('artists');
    }
}
