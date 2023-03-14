<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        người hưởng thụ:
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name'); //	Tên người thụ hưởng
            $table->unsignedBigInteger('account_number');// 	Tài khoản thụ hưởng
            $table->unsignedBigInteger('bank_id'); // Đơn vị thụ hưởng
            $table->unsignedInteger('routing_number'); // số chuyển tuyeens của ngân hàng người hưởng thụ( thường là 9 số)
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
        Schema::dropIfExists('beneficiaries');
    }
}
