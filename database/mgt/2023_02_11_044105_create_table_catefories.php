<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCatefories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // default: primary key , autoIncrement,big int
            $table->string('name',100); // default string length = 255
            $table->string('icon')->nullable();
            $table->boolean('status')->default(true);
//            $table->binary('img');
            $table->timestamps(); // auto create created_at and updated_At
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
