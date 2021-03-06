<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel', function (Blueprint $table) {
            $table->id();
            $table->string('namaHotel');
            $table->string('deskripsiHotel', 1000);
            $table->integer('hargaKamar');
            $table->string('gambarHotel1');
            $table->string('gambarHotel2')->nullable();
            $table->string('gambarHotel3')->nullable();
            $table->string('gambarHotel4')->nullable();
            $table->string('gambarHotel5')->nullable();
            $table->string('logoHotel');
            $table->integer('stokKamar');
            $table->float('bintang');
            $table->string('lokasi');
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
        Schema::dropIfExists('hotel');
    }
}
