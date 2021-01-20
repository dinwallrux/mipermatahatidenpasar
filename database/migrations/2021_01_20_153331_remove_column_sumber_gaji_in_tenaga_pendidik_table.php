<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnSumberGajiInTenagaPendidikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenaga_pendidik', function (Blueprint $table) {
            $table->dropColumn('sumber_gaji');
            $table->dropColumn('nama_ibu_kandung');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tenaga_pendidik', function (Blueprint $table) {
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('sumber_gaji')->nullable();
        });
    }
}
