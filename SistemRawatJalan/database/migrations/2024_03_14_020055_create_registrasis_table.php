<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasis', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('nama_lengkap', 25);
            $table->string('username', 25);
            $table->string('email', 55);
            $table->string('password', 25);
            $table->string('nomor_telepon', 20);
            $table->enum('role', ['dokter', 'pasien', 'admin','apoteker']);
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
        Schema::dropIfExists('registrasis');
    }
}
