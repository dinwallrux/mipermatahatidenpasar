<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRombelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('rombel'))
        {
            Schema::create('rombel', function (Blueprint $table) {
                $table->id();
                $table->string('tingkat_pendidikan');
                $table->string('kurikulum');
                $table->string('nama_rombel');
                $table->foreignId('id_guru')->constrained('tenaga_pendidik')->nullable();
                $table->timestamps();
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
        Schema::dropIfExists('rombel');
    }
}
