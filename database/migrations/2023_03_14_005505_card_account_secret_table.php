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
            $table->boolean('card_lock')->default(false);       // for Card
            $table->boolean('atm_pos_lock')->default(false);    // for Card
            $table->boolean('online_lock')->default(false);     //  for Account
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
        Schema::dropIfExists('card_secret');
    }
}
