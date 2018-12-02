<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acaras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_acara');
            // kategori acara
            // 1. untuk mahasiswa Politeknik Harapan Bersama
            // 2. untuk Umum dan Mahasiswa
            $table->tinyInteger('kategori');
            $table->boolean('active')->default(true);
            $table->date('tanggal_acara');
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
        Schema::dropIfExists('acaras');
    }
}
