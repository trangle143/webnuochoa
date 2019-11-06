<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Khuyenmai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('Khuyenmai', function (Blueprint $table) {
            $table->bigIncrements('km_id');
            $table->text('tenkm');
            $table->string('thongtinkm');
            $table->text('hinhanhkm');
            $table->integer('phantram');
            $table->date('ngaybatdau');
            $table->date('ngayketthuc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Khuyenmai');
    }
}
