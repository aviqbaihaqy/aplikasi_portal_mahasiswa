<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTampilanInformasiRincianTagihanDownloadPDFTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampilan__informasi__rincian__tagihan__download_p_d_f', function (Blueprint $table) {
            $table->increments('id');
            $table->string('peruntukan');
            $table->string('komponen');
            $table->string('jumlah');
            $table->string('remisi');
            $table->string('total');
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
        Schema::dropIfExists('_tampilan__informasi__rincian__tagihan__download_p_d_f');
    }
}
