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
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('card_id');
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->foreign('card_id')->references('id')->on('cards');
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
