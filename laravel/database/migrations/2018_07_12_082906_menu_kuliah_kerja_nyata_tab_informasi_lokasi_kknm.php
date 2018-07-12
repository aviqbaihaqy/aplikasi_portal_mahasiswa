<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MenuKuliahKerjaNyataTabInformasiLokasiKknm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasikknm', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('kabupaten');
            $table->string ('kecamatan');
            $table->string ('desa');
            $table->string ('informasi_lokasi');
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
        Schema::dropIfExists('lokasikknm');
    }
}
