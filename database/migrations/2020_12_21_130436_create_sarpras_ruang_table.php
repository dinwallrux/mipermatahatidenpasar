<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSarprasRuangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sarpras_ruang', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_prasarana')->nullable();
            $table->string('nama_ruang')->nullable();
            $table->string('lantai_ke')->nullable();
            $table->string('jumlah_ruangan')->nullable();
            $table->bigInteger('kapasitas')->nullable();
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
        Schema::dropIfExists('sarpras_ruang');
    }
}
