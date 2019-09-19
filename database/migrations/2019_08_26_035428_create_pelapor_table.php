<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelaporTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelapor', function (Blueprint $table) {
            $table->integer('id_diri')->unsigned();
            $table->foreign('id_diri')->references('id')->on('penduduk')->onDelete('cascade');
            $table->integer('id_kematian')->unsigned();
            $table->foreign('id_kematian')->references('id')->on('kematians')->onDelete('cascade');
            $table->string('nama');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelapor');
    }
}
