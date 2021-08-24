<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldInProfilSekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profil_sekolah', function (Blueprint $table) {
            $table->longText('deskripsi')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profil_sekolah', function (Blueprint $table) {
            $table->dropColumn('deskripsi');
            $table->dropColumn('no_telepon');
            $table->dropColumn('email');
        });
    }
}
