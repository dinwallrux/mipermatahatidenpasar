<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTahunAjaranInRombelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rombel', function (Blueprint $table) {
            $table->string('tahun_ajaran')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rombel', function (Blueprint $table) {
            $table->dropColumn('tahun_ajaran');
        });
    }
}
