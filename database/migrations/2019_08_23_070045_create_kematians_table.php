<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKematiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kematians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_diri')->unsigned();
            $table->foreign('id_diri')->references('id')->on('penduduk')->onDelete('cascade');
            $table->date('tgl');
            $table->string('tempat',200);
            $table->string('penyebab',500);
            $table->string('makam',200);
            $table->string('pelapor',200);            
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
        Schema::dropIfExists('kematians');
    }
}
