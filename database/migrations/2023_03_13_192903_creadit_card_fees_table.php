<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreaditCardFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_card_fees_conditions', function (Blueprint $table) {
            $table->id();
            $table->unsignedDecimal('issue_fee',16,2)->default(0);   // phí phát hành
            $table->unsignedDecimal('annual_card_fee',16,2);   // phí thường niên
            $table->unsignedDecimal('cash_advance_fee',16,2)->default(0);   // phí rút tiền mặt
            $table->unsignedDecimal('pin_reissue_fee',16,2);   // phí cấp lại mã PIN
            $table->unsignedDecimal('card_reissue_fee',16,2);   // phí cấp lại thẻ
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
        Schema::dropIfExists('credit_card_table');
    }
}
