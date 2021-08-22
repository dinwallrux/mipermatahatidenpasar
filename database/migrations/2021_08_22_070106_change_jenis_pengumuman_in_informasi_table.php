<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeJenisPengumumanInInformasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('informasi', function (Blueprint $table) {
            $table->text('jenis_pengumuman')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('informasi', function (Blueprint $table) {
            $table->string('jenis_pengumuman', 30)->change()->nullable();
        });
    }
}
