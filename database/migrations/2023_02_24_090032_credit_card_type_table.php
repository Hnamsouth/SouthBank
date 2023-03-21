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
            $table->unsignedDecimal('limit',16,2);               // hạn mức
            $table->string('special_feature');
            $table->unsignedDecimal('annual_fees',8,2);
            $table->unsignedTinyInteger('interest_rate'); // lai xuat
            $table->unsignedBigInteger('account_type_id')->nullable();
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
