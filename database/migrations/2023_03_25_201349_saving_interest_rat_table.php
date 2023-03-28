<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SavingInterestRatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saving_interest_rate', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('from')->nullable();    // mức tiền: 1.000.000 = 1
            $table->unsignedInteger('to')->nullable();
            $table->string('currency')->default('VND');
            $table->unsignedBigInteger('interest_payment_method_id');
            $table->unsignedBigInteger('deposit_type_id');
            $table->foreign('deposit_type_id')->references('id')->on('deposit_type');
            $table->foreign('interest_payment_method_id')->references('id')->on('interest_payment_method');
            // kỳ hạn (period)
            $table->unsignedFloat('p_0')->nullable();
            $table->unsignedFloat('p_1')->nullable();
            $table->unsignedFloat('p_2')->nullable();
            $table->unsignedFloat('p_3')->nullable();
            $table->unsignedFloat('p_4')->nullable();
            $table->unsignedFloat('p_5')->nullable();
            $table->unsignedFloat('p_6')->nullable();
            $table->unsignedFloat('p_7')->nullable();
            $table->unsignedFloat('p_8')->nullable();
            $table->unsignedFloat('p_9')->nullable();
            $table->unsignedFloat('p_10')->nullable();
            $table->unsignedFloat('p_11')->nullable();
            $table->unsignedFloat('p_12')->nullable();
            $table->unsignedFloat('p_13')->nullable();
            $table->unsignedFloat('p_15')->nullable();
            $table->unsignedFloat('p_18')->nullable();
            $table->unsignedFloat('p_24')->nullable();
            $table->unsignedFloat('p_36')->nullable();
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
        Schema::dropIfExists('saving_interest_rate');
    }
}
