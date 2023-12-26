<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoinbasePayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coinbase_payments', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->text('charge_id');
            $table->string('charge_code');
            $table->integer('customer_id')->unsigned();
            $table->string('customer_name');
            $table->text('request_address');
            $table->string('currency_type');
            $table->string('amount')->default('0.00');
            $table->string('charge_status')->default('NEW');
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
        Schema::table('coinbase_payments', function (Blueprint $table) {
            //
        });
    }
}
