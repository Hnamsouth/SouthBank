<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserSecretTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_secret', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('CMND_CCCD');
            $table->unsignedInteger('old_CMND_CCCD')->nullable();
            $table->string('secret_question');
            $table->string('selfie');// url
            $table->string('CMND_CCCD_IMG_BEFORE');
            $table->string('CMND_CCCD_IMG_AFTER');
            $table->string('relative_phone_1');
            $table->string('relative_phone_2');
            $table->unsignedDecimal('salary',14,2);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('user_secret');
    }
}
