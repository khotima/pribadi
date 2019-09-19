<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendatangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendatang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik',50);
            $table->string('nama',200);
            $table->string('tempat_lahir',100);
            $table->date('tgl_lahir');
            $table->string('agama',50);
            $table->string('jk',50);
            $table->string('umur',50);
            $table->string('gol_darah',50);
            $table->string('rtrw',50);
            $table->string('pekerjaan',50);
            $table->string('set_kawin',50);
            $table->string('kwn',50);
            $table->string('pend_ahir',50);
            $table->string('ket_membaca',50);      
            $table->date('tgl_datang');
            $table->string('asal',200);
            $table->string('ket_pindah',500);

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
        Schema::dropIfExists('pendatang');
    }
}
