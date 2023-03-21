<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoansAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans_account', function (Blueprint $table) {
            $table->id();
            $table->string('loans_number');
            $table->unsignedDecimal('loan_amount',16,4);
            $table->decimal('remaining_amount',16,4);
            $table->unsignedInteger('tenor'); //  /month
            $table->unsignedFloat('interest_rate',2,1);
            $table->text('description');
            $table->tinyInteger('status');
            $table->date('loan_date');
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('loan_type_id');
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->foreign('loan_type_id')->references('id')->on('loans_type');
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
        Schema::dropIfExists('loans');
    }
}
