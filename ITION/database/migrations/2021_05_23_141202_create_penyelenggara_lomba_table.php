<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePenyelenggaraLombaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyelenggara_lomba', function (Blueprint $table) {
            $table->id('id_penyelenggara');
            $table->string('nama_penyelenggara');
            $table->string('kontak');
            $table->string('nama_kontak');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyelenggara_lomba');
    }
}
