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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->increments('id_pasien');
            $table->string('nama_lengkap', 30);
            $table->string('jenis_kelamin', 10);
            $table->string('tempat_lahir', 25);
            $table->date('tanggal_lahir');
            $table->string('nama_ibu_kandung' ,25);
            $table->string('agama' ,10);
            $table->string('status', 15);
            $table->string('pendidikan', 25);
            $table->string('pekerjaan', 25);
            $table->string('nomor_ktp', 25);
            $table->string('nomor_kk', 25);
            $table->string('nomor_bpjs', 25);
            $table->string('nomor_telepon', 20);
            $table->string('provinsi', 25);
            $table->string('kabupaten_kota', 25);
            $table->string('alamat', 25);
            $table->string('golongan_darah', 3);
            $table->string('email', 25);
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
        Schema::dropIfExists('pasiens');
    }
};
