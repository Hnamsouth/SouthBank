<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreditCardTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_card_type', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img');
            $table->text('description');
            $table->unsignedInteger('limit');               // hạn mức
            $table->string('special_feature');
            $table->unsignedInteger('annual_fees');
            $table->unsignedTinyInteger('interest_rate'); // lai xuat
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
