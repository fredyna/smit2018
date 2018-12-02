<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profils', function (Blueprint $table) {
            $table->integer('user_id')->unique();
            $table->string('nim', 8)->nullable();
            $table->string('no_hp');
            $table->string('jenis_kelamin', 9);
            $table->string('prodi')->nullable();
            $table->tinyInteger('semester', 1)->nullable();
            $table->string('alamat');
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
        Schema::dropIfExists('user_profils');
    }
}
