<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToStockTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock_transaction', function (Blueprint $table) {
            $table->foreign(['artist_id'], 'stock_transaction_ibfk_1')->references(['id'])->on('artists')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stock_transaction', function (Blueprint $table) {
            $table->dropForeign('stock_transaction_ibfk_1');
        });
    }
}
