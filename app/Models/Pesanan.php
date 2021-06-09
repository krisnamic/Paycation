<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_User',
        'ID_Hotel',
        'hargaPesanan',
        'namaPemesan',
        'nomorTelepon',
        'emailTamu',
        'jumlahKamar',
        'checkIn',
        'checkOut',
        'jamBooking',
        'tanggalBooking',
    ];
    protected $table = 'pesanan';
}
