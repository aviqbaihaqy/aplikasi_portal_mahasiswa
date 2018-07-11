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
            $table->string('tahun_ajaran',50);
            $table->string('nama_kegiatan',150);
            $table->text('tipe_kegiatan');
            $table->string('point');
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
