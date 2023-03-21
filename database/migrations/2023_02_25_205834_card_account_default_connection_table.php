<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CardAccountDefaultConnectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_account_default_connection', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_type_id')->nullable();
            $table->unsignedBigInteger('account_type_id');

            $table->foreign('card_type_id')->references('id')->on('card_type');
            $table->foreign('account_type_id')->references('id')->on('account_type');
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
