<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->increments('id_tindakan');
            $table->unsignedInteger('id_pasien');
            $table->unsignedInteger('id_dokter');
            $table->foreign('id_pasien')->references('id_pasien')->on('pasiens');
            $table->foreign('id_dokter')->references('id_dokter')->on('dokters');
            $table->string('nama_penyakit', 25);
            $table->string('keluhan', 35);
            $table->date('tanggal');
            $table->string('tindakan', 35);
            $table->string('deskripsi', 50);
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
        Schema::dropIfExists('rekam_medis');
    }
};
