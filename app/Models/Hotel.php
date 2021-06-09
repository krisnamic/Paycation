<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaHotel',
        'deskripsiHotel',
        'hargaKamar',
        'gambarHotel1',
        'gambarHotel2',
        'gambarHotel3',
        'gambarHotel4',
        'gambarHotel5',
        'stokKamar',
        'bintang',
        'lokasi',
    ];
    protected $table = 'hotel';
}
