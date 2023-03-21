<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CardAccountSecretTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_account_secret', function (Blueprint $table) {
            $table->id();
            $table->string('PIN');                                    // both
            $table->boolean('card_lock')->default(false)->nullable();       // for Card
            $table->boolean('atm_pos_lock')->default(false)->nullable();    // for Card
            $table->boolean('online_lock')->default(false)->nullable();     //  for Account

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
        Schema::dropIfExists('card_secret');
    }
}
