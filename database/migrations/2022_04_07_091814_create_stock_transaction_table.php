<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_transaction', function (Blueprint $table) {
            $table->integer('id', true);
            $table->tinyInteger('type')->comment('1-sell,2-buy');
            $table->integer('user_id');
            $table->unsignedInteger('artist_id')->index('artist_foreign_key_idx');
            $table->integer('quantity');
            $table->string('stock_value', 255);
            $table->string('total_cost', 255);
            $table->decimal('admin_cost', 10, 0)->nullable();
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
        Schema::dropIfExists('stock_transaction');
    }
}
