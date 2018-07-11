<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MataKuliahSemesterAntara extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_kuliah_semester_antara', function (Blueprint $table) {
            $table->increments('id');
            $table->string('No');
            $table->string('Sandi MK');
            $table->string('Mata Kuliah');
            $table->string('SKS');
            $table->string('Kuota');
            $table->string('Sisa Kuota');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_kuliah_semester_antara');
    }
}
