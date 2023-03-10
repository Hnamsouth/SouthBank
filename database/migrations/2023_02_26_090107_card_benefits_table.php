<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CardBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_benefits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_type_id');
            $table->string('name');// or nane
            $table->text('description');
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
        Schema::dropIfExists('card_benefits');
    }
}
