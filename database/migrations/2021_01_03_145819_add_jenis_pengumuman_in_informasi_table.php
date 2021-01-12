<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenisPengumumanInInformasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('informasi', 'jenis_pengumuman'))
        {
            Schema::table('informasi', function (Blueprint $table) {
                $table->string('jenis_pengumuman')->after('excerpt')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('informasi', 'jenis_pengumuman'))
        {
            Schema::table('informasi', function (Blueprint $table) {
                $table->dropColumn('jenis_pengumuman');
            });
        }
    }
}
