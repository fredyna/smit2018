<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acara_id');
            $table->string('nim', 8)->nullable();
            $table->string('email');
            $table->string('nama');
            $table->string('prodi')->nullable();
            $table->tinyInteger('semester')->nullable();
            $table->string('jenis_kelamin',9);
            $table->string('no_hp');
            $table->string('alamat');
            // kategori acara
            // 1. untuk mahasiswa Politeknik Harapan Bersama
            // 2. untuk Umum dan Mahasiswa
            $table->tinyInteger('kategori');
            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('pesertas');
    }
}
