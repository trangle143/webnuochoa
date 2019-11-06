<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hinhthucthanhtoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('Hinhthucthanhtoan', function (Blueprint $table) {
            $table->bigIncrements('httt_id');
            $table->text('kieuthanhtoan');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Hinhthucthanhtoan');
    }
}
