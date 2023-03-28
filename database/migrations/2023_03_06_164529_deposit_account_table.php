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
            $table->string('account_number');
            $table->unsignedDecimal('initial_amount',14,6);      // số tiền ban đầu
            $table->unsignedDecimal('current_balance',14,6);     // số dư hiện tại
            $table->unsignedTinyInteger('terms');                           // kỳ hạn mở
            $table->unsignedInteger('interest_payment_period')->nullable();          // kỳ trar lãi
            $table->unsignedBigInteger('interest_payment_method_id');          // phương thức trả lãi: đầu kỳ,cuối kì, định kỳ

            $table->date('open_date');                                      // ngày mở
            $table->date('close_date');                                     // ngày tất toán
            $table->unsignedInteger('days');                                // số ngày đã gửi
            $table->unsignedDecimal('profit',16,4);                                // số ngày đã gửi
            $table->string('saving_deposit_type')->default('VND');    // loại tiền gửi

            $table->unsignedBigInteger('deposit_type_id');                  // loại tài khoản tiết kiệm
            $table->unsignedBigInteger('source_account_id');                // tài khoản chuyển tiền mở stk
            $table->unsignedBigInteger('account_receive_id');               // tk nhận gốc và lãi
            $table->unsignedBigInteger('settlement_method_id');
            $table->string('settlement_channel');

            $table->foreign('interest_payment_method_id')->references('id')->on('interest_payment_method');
            $table->foreign('deposit_type_id')->references('id')->on('deposit_type');
            $table->foreign('source_account_id')->references('id')->on('accounts');
            $table->foreign('account_receive_id')->references('id')->on('accounts');
            $table->foreign('settlement_method_id')->references('id')->on('settlement_method');
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
