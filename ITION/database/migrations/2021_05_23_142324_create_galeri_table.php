<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateGaleriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeri', function (Blueprint $table) {
            $table->id('id_galeri');
            $table->unsignedBigInteger('id_lomba');
            $table->foreign('id_lomba')->references('id_lomba')->on('lomba');
            $table->string('foto');
            $table->text('deskripsi')->nullable();
            $table->date('tgl_foto');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeri');
    }
}
