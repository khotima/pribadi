<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelahiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelahiran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_diri')->unsigned();
            $table->foreign('id_diri')->references('id')->on('penduduk')->onDelete('cascade');
            $table->integer('akta');
            $table->string('nama',500);
            $table->string('tempat_lahir',500);
            $table->date('tgl_lahir');
            $table->string('jk');
            $table->string('anak_ke');
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
        Schema::dropIfExists('kelahiran');
    }
}
