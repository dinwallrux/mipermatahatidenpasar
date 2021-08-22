<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNikInTenagaPendidikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenaga_pendidik', function (Blueprint $table) {
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
        Schema::table('tenaga_pendidik', function (Blueprint $table) {
            $table->dropUnique('tenaga_pendidik_nik_unique');
            $table->bigInteger('nik')->change();
        });
    }
}
