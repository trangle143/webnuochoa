<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Donhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Donhang', function (Blueprint $table) {
            $table->bigIncrements('dh_id');
            $table->integer('tongtien');
            $table->integer('tongsp');
            $table->text('ghichu');
            $table->string('admin_phanhoi');
            $table->integer('thanhtoan');
            $table->integer('id_trangthai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Donhang');
    }
}
