<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CardAccountSecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_account_security', function (Blueprint $table) {
            $table->id();
            $table->string('PIN_encrypted');
            $table->unsignedBigInteger('card_number');
            $table->unsignedBigInteger('account_number');
            $table->foreign('card_number')->references('card_number')->on('cards');
            $table->foreign('account_number')->references('account_number')->on('accounts');
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
        Schema::dropIfExists('card_account_security');
    }
}
