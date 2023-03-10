<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DepositAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposit_account', function (Blueprint $table) {
            $table->id();
            $table->unsignedDecimal('initial_amount',14,6);
            $table->unsignedDecimal('current_balance',14,6);
            $table->unsignedFloat('interest_rate',2,1);
            $table->unsignedTinyInteger('terms');
            $table->date('open_date');
            $table->date('close_date');
            $table->unsignedInteger('days');
            $table->unsignedBigInteger('deposit_type_id');
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('deposit_account');
    }
}
