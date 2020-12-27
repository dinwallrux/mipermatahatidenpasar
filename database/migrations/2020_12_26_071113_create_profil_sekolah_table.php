<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilSekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah')->nullable();
            $table->bigInteger('npsn')->nullable();
            $table->string('alamat')->nullable();
            $table->string('status_sekolah')->nullable();
            $table->string('akreditasi')->nullable();
            $table->string('kurikulum')->nullable();
            $table->integer('jumlah_guru')->nullable();
            $table->integer('jumlah_siswa_laki_laki')->nullable();
            $table->integer('jumlah_siswa_perempuan')->nullable();
            $table->string('kepala_sekolah')->nullable();
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
        Schema::dropIfExists('profil_sekolah');
    }
}
