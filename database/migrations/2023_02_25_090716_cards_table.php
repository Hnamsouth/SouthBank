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
            $table->date('activation_date');
            $table->unsignedInteger('cvv');
            $table->tinyInteger('status'); // dang hoat dong- khoa the- khoa thanh toan online - khoa gg qua ATM $ POS
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('card_type_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('card_type_id')->references('id')->on('card_type');
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
