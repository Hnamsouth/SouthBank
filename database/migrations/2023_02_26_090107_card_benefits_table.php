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
            $table->text('benefit_new_card');// 1./Lợi ích khi mở thẻ
            $table->text('benefit_using_card');// 1./Lợi ích khi sử dụng thẻ
            $table->text('benefit_additional_card');// 1./Lợi ích cộng thêm
            // lưu dưới hạng html . dùng edit

            $table->unsignedBigInteger('credit_card_type_id')->nullable();
            $table->unsignedBigInteger('debit_card_type_id')->nullable();
            $table->foreign('credit_card_type_id')->references('id')->on('credit_card_type');
            $table->foreign('debit_card_type_id')->references('id')->on('debit_card_type');
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
