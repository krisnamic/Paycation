<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_User');
            $table->foreign('ID_User')->references('id')->on('users');
            $table->unsignedBigInteger('ID_Hotel');
            $table->foreign('ID_Hotel')->references('id')->on('hotel');
            $table->integer('hargaPesanan');
            $table->string('namaPemesan');
            $table->string('nomorTelepon');
            $table->string('emailTamu');
            $table->integer('jumlahKamar');
            $table->date('checkIn');
            $table->date('checkOut');
            $table->time('jamBooking');
            $table->date('tanggalBooking');
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
        Schema::dropIfExists('pesanan');
    }
}
