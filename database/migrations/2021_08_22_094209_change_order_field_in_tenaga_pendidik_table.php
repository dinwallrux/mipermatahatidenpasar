<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeOrderFieldInTenagaPendidikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenaga_pendidik', function (Blueprint $table) {
            $table->unsignedInteger('order')->unique()->nullable()->change();
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
            $table->dropUnique('tenaga_pendidik_order_unique');
            $table->integer('order')->change();
        });
    }
}
