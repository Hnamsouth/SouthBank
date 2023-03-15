<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CardAccountConnectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_account_connection', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_id')->nullable();
            $table->unsignedBigInteger('account_number');

            $table->foreign('card_id')->references('id')->on('cards');
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
