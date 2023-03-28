<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransactionsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions_history', function (Blueprint $table) {
            $table->id();
            $table->string('to_number');
            $table->string('from_number'); //
            $table->string('bank_name')->nullable(); //
            $table->string('account_holder_name'); //
            $table->unsignedDecimal('amount',12,3);
            $table->unsignedBigInteger('transaction_type_id');
            $table->unsignedDecimal('fees',12,4)->nullable();
            $table->tinyInteger('status');
            $table->text('description')->nullable();
            $table->foreign('transaction_type_id')->references('id')->on('transaction_type');
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
        Schema::dropIfExists('transactions');
    }
}
