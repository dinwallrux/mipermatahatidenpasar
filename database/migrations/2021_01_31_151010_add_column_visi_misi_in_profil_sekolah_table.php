<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnVisiMisiInProfilSekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profil_sekolah', function (Blueprint $table) {
            $table->longText('visi');
            $table->longText('misi');
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
            $table->dropColumn('visi');
            $table->dropColumn('misi');
        });
    }
}
