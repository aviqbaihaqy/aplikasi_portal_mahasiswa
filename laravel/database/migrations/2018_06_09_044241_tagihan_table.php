<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TagihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tahun');
            $table->string('no_tag')->unique();
            $table->string('jml_sks');
            $table->string('total_bayar');
            $table->string('status_bayar');
            $table->string('detail');
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
       Schema::dropIfExists('tagihan');
    }
}
