<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedDecimal('loan_amount',16,4);
            $table->decimal('remaining_amount',16,4);
            $table->unsignedInteger('tenor'); //  /month
            $table->unsignedFloat('interest_rate',2,1);
            $table->text('description');
            $table->tinyInteger('status');
            $table->string('loan_type');
            $table->date('loan_date');
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
