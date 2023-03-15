<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BalanceCardAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_card_account', function (Blueprint $table) {
            $table->id();
            $table->unsignedDecimal('balance',16,4);
            $table->unsignedBigInteger('card_account_connection_id');
            $table->foreign('card_account_connection_id')->references('id')->on('card_account_connection');
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
        Schema::dropIfExists('balance_card_account');
    }
}
