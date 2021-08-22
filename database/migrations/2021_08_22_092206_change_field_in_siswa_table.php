<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFieldInSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->unsignedInteger('nis')->unique()->nullable()->change();
            $table->unsignedBigInteger('nisn')->unique()->nullable()->change();
            $table->unsignedBigInteger('nik')->unique()->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropUnique('siswa_nis_unique');
            $table->dropUnique('siswa_nisn_unique');
            $table->dropUnique('siswa_nik_unique');
            $table->integer('nis')->nullable()->change();
            $table->bigInteger('nisn')->nullable()->change();
            $table->bigInteger('nik')->nullable()->change();
        });
    }
}
