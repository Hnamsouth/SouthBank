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
            $table->string('CMND_CCCD');
            $table->string('old_CMND_CCCD')->nullable();
            $table->string('secret_question')->nullable();
            $table->string('selfie')->nullable();// url
            $table->string('CMND_CCCD_IMG_BEFORE')->nullable();
            $table->string('CMND_CCCD_IMG_AFTER')->nullable();
            $table->string('relative_phone_1')->nullable();
            $table->string('relative_phone_2')->nullable();
            $table->unsignedDecimal('salary',14,2)->nullable();
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
