<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranskripKemahasiswaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transkrip_kemahasiswaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string[100]('nama_kegiatan');
            $table->string[100]('tipe_kegiatan');
            $table->integer[4]('point');
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
        Schema::dropIfExists('transkrip_kemahasiswaan');
    }
}
