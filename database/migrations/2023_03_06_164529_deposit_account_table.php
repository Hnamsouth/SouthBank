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
            $table->unsignedDecimal('initial_amount',14,6);      // số tiền ban đầu
            $table->unsignedDecimal('current_balance',14,6);     // số dư hiện tại
            $table->unsignedFloat('interest_rate',2,1);          // lãi suất tiết kiệm
            $table->unsignedTinyInteger('terms');                           // kỳ hạn
            $table->date('open_date');                                      // ngày mở
            $table->date('close_date');                                     // ngày mở
            $table->unsignedInteger('days');                                // số ngày đã gửi
            $table->unsignedBigInteger('deposit_type_id');                  // loại tài khoản tiết kiệm
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('status');                                      // trạng thái (đóng- hoạt động)
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
