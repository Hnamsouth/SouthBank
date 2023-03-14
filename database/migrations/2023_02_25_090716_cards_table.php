<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_number')->unique();
            $table->string('name');
            $table->date('expiration_date');
            $table->date('start_date');
            $table->unsignedTinyInteger('cvv');
            $table->unsignedBigInteger('account_id');
            $table->tinyInteger('status'); // dang hoat dong- khoa the- khoa thanh toan online - khoa gg qua ATM $ POS
            $table->foreign('account_id')->references('id')->on('accounts');
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
        Schema::dropIfExists('cards');
    }
}
