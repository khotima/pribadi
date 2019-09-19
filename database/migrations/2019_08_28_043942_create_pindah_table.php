<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePindahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pindah', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_diri')->unsigned();
            $table->foreign('id_diri')->references('id')->on('penduduk')->onDelete('cascade');
            $table->date('tgl_pindah');
            $table->string('almt_tujuan');
            $table->string('alasan');
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
        Schema::dropIfExists('pindah');
    }
}
