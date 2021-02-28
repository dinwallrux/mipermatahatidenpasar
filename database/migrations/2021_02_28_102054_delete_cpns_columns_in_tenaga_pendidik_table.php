<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteCpnsColumnsInTenagaPendidikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenaga_pendidik', function (Blueprint $table) {
            $table->dropColumn('sk_cpns');
            $table->dropColumn('tmt_cpns');
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
            $table->string('sk_cpns')->nullable();
            $table->date('tmt_cpns')->nullable();
        });
    }
}
