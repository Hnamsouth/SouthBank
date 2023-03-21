<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CardTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_type', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // có thể trùng tên nhưng phải khác kiểu
            $table->string('type'); // debit-credit
            $table->unsignedBigInteger('credit_card_type_id')->nullable();
            $table->unsignedBigInteger('debit_card_type_id')->nullable();

            $table->foreign('credit_card_type_id')->references('id')->on('credit_card_type');
            $table->foreign('debit_card_type_id')->references('id')->on('debit_card_type');
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
        Schema::dropIfExists('card_type');
    }
}
