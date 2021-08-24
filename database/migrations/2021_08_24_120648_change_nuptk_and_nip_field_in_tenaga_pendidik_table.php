<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNuptkAndNipFieldInTenagaPendidikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenaga_pendidik', function (Blueprint $table) {
            $table->unsignedBigInteger('nuptk')->unique()->nullable()->change();
            $table->unsignedBigInteger('nip')->unique()->nullable()->change();
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
            $table->dropUnique('tenaga_pendidik_nuptk_unique');
            $table->bigInteger('nuptk')->change();
            $table->dropUnique('tenaga_pendidik_nip_unique');
            $table->bigInteger('nip')->change();
        });
    }
}
