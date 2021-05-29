<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateLombaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lomba', function (Blueprint $table) {
            $table->id('id_lomba');
            $table->string('poster')->nullable();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->text('syarat')->nullable();
            $table->text('timeline')->nullable();
            $table->string('biaya');
            $table->string('link_panduan');
            $table->string('hadiah_juara_1')->nullable();
            $table->string('hadiah_juara_2')->nullable();
            $table->string('hadiah_juara_3')->nullable();
            $table->string('lainnya')->nullable();
            $table->date('deadline');

            //start foreign key
            $table->unsignedBigInteger('id_penyelenggara');
            $table->foreign('id_penyelenggara')->references('id_penyelenggara')->on('penyelenggara_lomba');
            $table->unsignedBigInteger('id_kategori');
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
            //end foreign key

            $table->string('tahun');
            $table->string('link_website');

            //dumped column
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
        Schema::dropIfExists('lomba');
    }
}
