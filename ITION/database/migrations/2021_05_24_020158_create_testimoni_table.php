<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTestimoniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimoni', function (Blueprint $table) {
            //start foreign key
            $table->unsignedBigInteger('id_lomba');
            $table->foreign('id_lomba')->references('id_lomba')->on('lomba');
            $table->unsignedBigInteger('id_reviewer');
            $table->foreign('id_reviewer')->references('id_reviewer')->on('reviewer');
            $table->primary(['id_lomba','id_reviewer']);
            //end foreign key

            $table->string('tahun_lomba');
            $table->string('testimoni', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimoni');
    }
}
