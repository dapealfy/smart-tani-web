<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilPanensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_panens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kelompok_tani_id')->unsigned();
            $table->string('jadwal_panen');
            $table->string('jadwal_tanam');
            $table->string('kebutuhan_bersih');
            $table->string('hasil');
            $table->timestamps();

            $table->foreign('kelompok_tani_id')->references('id')->on('kelompok_tanis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_panens');
    }
}
