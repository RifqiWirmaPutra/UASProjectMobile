<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->increments('id_pendaftaran');
            $table->unsignedInteger('id_pasien');
            $table->unsignedInteger('id_dokter');
            $table->foreign('id_pasien')-> references('id_pasien')-> on ('pasiens');
            $table->foreign('id_dokter')-> references('id_dokter')-> on ('dokters');
            $table->char('nomor_antrian', 15);
            $table->string('nama_pasien', 30);
            $table->date('tanggal');
            $table->string('status', 15);
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
        Schema::dropIfExists('pendaftarans');
    }
};
