<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerawatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perawatans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pembibitan_id')->unsigned();
            $table->string('jenis_hama');
            $table->string('obat_hama');
            $table->text('deskripsi');
            $table->timestamps();

            $table->foreign('pembibitan_id')->references('id')->on('pembibitans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perawatans');
    }
}
