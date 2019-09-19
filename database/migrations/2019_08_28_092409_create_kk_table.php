<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_kk',50);
            $table->integer('id_diri')->unsigned();
            $table->foreign('id_diri')->references('id')->on('penduduk')->onDelete('cascade');
            $table->string('status',500);
            $table->string('ayah',100);
            $table->string('ibu',100);
            
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
        Schema::dropIfExists('kk');
    }
}
