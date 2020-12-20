<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenagaPendidikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenaga_pendidik', function (Blueprint $table) {
            $table->id('id_tenaga_pendidik');
            $table->string('nama')->nullable();
            $table->bigInteger('nik')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('alamat')->nullable();
            $table->string('agama')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('jenis_tendik')->nullable();
            $table->string('status_pegawai')->nullable();
            $table->bigInteger('nip')->nullable();
            $table->bigInteger('nuptk')->nullable();
            $table->string('jenis_ptk')->nullable();
            $table->string('sk_pengangkatan')->nullable();
            $table->date('tmt_pengangkatan')->nullable();
            $table->string('lembaga_pengangkat')->nullable();
            $table->string('sk_cpns')->nullable();
            $table->date('tmt_cpns')->nullable();
            $table->string('sumber_gaji')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('tenaga_pendidik');
    }
}
