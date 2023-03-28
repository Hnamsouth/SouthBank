<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DepositTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposit_type', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('min_term');                            // kỳ hạn gửi tối thieeru : tính theo tuần .
            $table->unsignedInteger('max_term')->default(144);        //  max mặc định là 36 tháng
            $table->unsignedDecimal('min_amount',16,2);                          // tiền gửi tối thiểu
            $table->boolean('withdraw_before_maturity');                    // tất toán trước hạn
            $table->boolean('increase_principal');                          // tăng gốc

            $table->string('img');
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
        Schema::dropIfExists('deposit_type');
    }
}
