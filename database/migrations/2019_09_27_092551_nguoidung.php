<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nguoidung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('Nguoidung', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('ten');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('sdt');
            $table->string('diachi');
            $table->integer('quyen');
            $table->timestamps('thoigiantao');
            $table->timestamps('thoigiancapnhat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Nguoidung');
    }
}
