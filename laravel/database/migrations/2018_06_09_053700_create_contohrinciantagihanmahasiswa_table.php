<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContohrinciantagihanmahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contohrinciantagihanmahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semester_tahun_ajaran');
            $table->string('pembayaran_untuk_tahun_ajaran');
            $table->string('no_tagihan');
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
        Schema::dropIfExists('contohrinciantagihanmahasiswa');
    }
}
