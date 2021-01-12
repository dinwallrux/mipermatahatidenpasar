<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdSarprasInRombelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rombel', function (Blueprint $table) {
            $table->foreignId('id_sarpras')->nullable()->constrained('sarpras_ruang');
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
            $table->dropColumn('id_sarpras');
        });
    }
}
