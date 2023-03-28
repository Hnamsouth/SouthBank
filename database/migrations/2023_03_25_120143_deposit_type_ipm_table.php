<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DepositTypeIpmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposit_type_ipm', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deposit_type_id');
            $table->unsignedBigInteger('interest_payment_method_id');

            $table->foreign('deposit_type_id')->references('id')->on('deposit_type');
            $table->foreign('interest_payment_method_id')->references('id')->on('interest_payment_method');
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
        Schema::dropIfExists('deposit_type_ipm');
    }
}
