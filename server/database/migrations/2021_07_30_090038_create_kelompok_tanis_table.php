<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelompokTanisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelompok_tanis', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->string('nama');
            $table->string('alamat');
            $table->string('ketua');
            $table->string('penyuluh');
            $table->string('kecamatan');
            $table->string('luas_tanah');
            $table->string('anggota');
            $table->string('unggulan');
            $table->double('lat');
            $table->double('lng');
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
        Schema::dropIfExists('kelompok_tanis');
    }
}
