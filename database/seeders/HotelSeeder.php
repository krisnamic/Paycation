<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotel')->delete();

        DB::table('hotel')->insert(array(
            0 =>
            array(
                'namaHotel' => 'JHL Solitaire Gading Serpong',
                'deskripsiHotel' => 'JHL Solitaire Gading Serpong is a 5-star luxury hotel located 40 minutes from the airport. The hotel reaches places such as the Indonesia Convention Exhibition (ICE) and well-known shopping centers such as AEON and IKEA. The majestic and spectacular elegance and architecture, comprising 141 rooms and suites.',
                'hargaKamar' => 1650000,
                'gambarHotel1' => 'jhl-1.png',
                'gambarHotel2' => 'jhl-2.png',
                'gambarHotel3' => 'jhl-3.png',
                'gambarHotel4' => 'jhl-4.png',
                'gambarHotel5' => 'jhl-5.png',
                'logoHotel' => 'jhl',
                'stokKamar' => 11,
                'bintang' => 5,
                'lokasi' => 'Tangerang',
                'created_at' => now(),
                'updated_at' => now()
            ),
            1 =>
            array(
                'namaHotel' => 'Hotel Santika BSD City - Serpong',
                'deskripsiHotel' => 'New hotel, located in the shopping and entertainment center of the city, within walking distance of the entertainment venues. Hotel Santika BSD provides 150 rooms and suites, meeting and conference facilities for up to 150 participants, wi-fi internet access in all areas of the hotel. LCD TV, safety deposit box and tea / coffee making facilities are provided in each room.',
                'hargaKamar' => 1600000,
                'gambarHotel1' => 'santika-1.png',
                'gambarHotel2' => 'santika-2.png',
                'gambarHotel3' => 'santika-3.png',
                'gambarHotel4' => 'santika-4.png',
                'gambarHotel5' => 'santika-5.png',
                'logoHotel' => 'santika',
                'stokKamar' => 8,
                'bintang' => 3.5,
                'lokasi' => 'Tangerang',
                'created_at' => now(),
                'updated_at' => now()
            ),
            2 =>
            array(
                'namaHotel' => 'Atria Hotel Gading Serpong',
                'deskripsiHotel' => 'Located in the business and entertainment district, Atria Hotel Gading Serpong offers comfortable accommodation with modern facilities. Free Wi-Fi, an outdoor pool and meeting rooms are just some of the facilities that you can find at this 4-star property.',
                'hargaKamar' => 2000000,
                'gambarHotel1' => 'atria-1.png',
                'gambarHotel2' => 'atria-2.png',
                'gambarHotel3' => 'atria-3.png',
                'gambarHotel4' => 'atria-4.png',
                'gambarHotel5' => 'atria-5.png',
                'logoHotel' => 'atria',
                'stokKamar' => 7,
                'bintang' => 4.5,
                'lokasi' => 'Tangerang',
                'created_at' => now(),
                'updated_at' => now()
            ),
            3 =>
            array(
                'namaHotel' => 'Horison Ultima Bandung',
                'deskripsiHotel' => 'As a "Business, Convention and Family Hotel" Horison Ultima Bandung provides the largest convention room in Bandung, with the \'Krakatau Convention Hall\' which can accommodate up to 3000 people, 26 small meeting rooms, and a large area for exhibitions, parties, gatherings and weddings. .',
                'hargaKamar' => 1400000,
                'gambarHotel1' => 'horison-1.png',
                'gambarHotel2' => 'horison-2.png',
                'gambarHotel3' => 'horison-3.png',
                'gambarHotel4' => 'horison-4.png',
                'gambarHotel5' => 'horison-5.png',
                'logoHotel' => 'horison',
                'stokKamar' => 6,
                'bintang' => 4,
                'lokasi' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now()
            ),
            4 =>
            array(
                'namaHotel' => 'éL Hotel Royale Bandung',
                'deskripsiHotel' => 'eL Hotel Royale Bandung, located in the heart of Bandung and surrounded by business and entertainment centers, only 100 meters from Jalan Braga which is famous for its heritage shops, culinary and entertainment centers.',
                'hargaKamar' => 2750000,
                'gambarHotel1' => 'elHotel-1.png',
                'gambarHotel2' => 'elHotel-2.png',
                'gambarHotel3' => 'elHotel-3.png',
                'gambarHotel4' => 'elHotel-4.png',
                'gambarHotel5' => 'elHotel-5.png',
                'logoHotel' => 'elHotel',
                'stokKamar' => 10,
                'bintang' => 4,
                'lokasi' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now()
            ),
            5 =>
            array(
                'namaHotel' => 'Ibis Bandung Trans Studio',
                'deskripsiHotel' => 'Ibis Bandung Trans Studio is strategically located in Bandung. The facilities and services provided by Ibis Bandung Trans Studio ensure a pleasant stay for guests. The hotel provides access to a number of services and facilities that will satisfy all guest\'s needs.',
                'hargaKamar' => 2100000,
                'gambarHotel1' => 'ibis-1.png',
                'gambarHotel2' => 'ibis-2.png',
                'gambarHotel3' => 'ibis-3.png',
                'gambarHotel4' => 'ibis-4.png',
                'gambarHotel5' => 'ibis-5.png',
                'logoHotel' => 'ibis',
                'stokKamar' => 8,
                'bintang' => 3,
                'lokasi' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now()
            ),
            6 =>
            array(
                'namaHotel' => 'Leisure Inn Arion Hotel',
                'deskripsiHotel' => 'Leisure Inn Arion Hotel was built with 9 floors, equipped with various facilities such as Portable Kitchen & Lounge, Double Decker Room in Junior Suite Type, ATM Gallery and other facilities.',
                'hargaKamar' => 1300000,
                'gambarHotel1' => 'leisure-1.png',
                'gambarHotel2' => 'leisure-2.png',
                'gambarHotel3' => 'leisure-3.png',
                'gambarHotel4' => 'leisure-4.png',
                'gambarHotel5' => 'leisure-5.png',
                'logoHotel' => 'leisure',
                'stokKamar' => 20,
                'bintang' => 4,
                'lokasi' => 'Jakarta Timur',
                'created_at' => now(),
                'updated_at' => now()
            ),
            7 =>
            array(
                'namaHotel' => 'Juno Jatinegara Jakarta',
                'deskripsiHotel' => 'Juno Jatinegara is located at Jakarta, 5 km from Bundaran HI. The hotel provides access to free Wi-Fi and restaurant. It is located at 5 km from Sarinah and 6 km from Monas and Tanah Abang Textiles and Wholesale Center. Some of the best landmarks to see are Museum Nasional Indonesia and Jakarta International Expo, located 6 km and 7 km from the hotel respectively.',
                'hargaKamar' => 2300000,
                'gambarHotel1' => 'juno-1.png',
                'gambarHotel2' => 'juno-2.png',
                'gambarHotel3' => 'juno-3.png',
                'gambarHotel4' => 'juno-4.png',
                'gambarHotel5' => 'juno-5.png',
                'logoHotel' => 'juno',
                'stokKamar' => 6,
                'bintang' => 3,
                'lokasi' => 'Jakarta Timur',
                'created_at' => now(),
                'updated_at' => now()
            ),
            8 =>
            array(
                'namaHotel' => 'Best Western Premier The Hive',
                'deskripsiHotel' => 'Best Western Premier The Hive Hotel has a strategic location in the Cawang business area, located between East Jakarta and South Jakarta, only takes 20 minutes to Kelapa Gading area and 10 minutes to Halim Perdanakusuma Airport, close to shopping areas and also government office areas and industrial area.',
                'hargaKamar' => 1250000,
                'gambarHotel1' => 'bestWestern-1.png',
                'gambarHotel2' => 'bestWestern-2.png',
                'gambarHotel3' => 'bestWestern-3.png',
                'gambarHotel4' => 'bestWestern-4.png',
                'gambarHotel5' => 'bestWestern-5.png',
                'logoHotel' => 'bestWestern',
                'stokKamar' => 14,
                'bintang' => 4.5,
                'lokasi' => 'Jakarta Timur',
                'created_at' => now(),
                'updated_at' => now()
            ),
            9 =>
            array(
                'namaHotel' => 'Aston Denpasar Hotel & Convention Center',
                'deskripsiHotel' => 'Lodging Suitable For Business And Leisure. Enjoy a beautiful hotel in the center of Denpasar. This hotel is a combination with unbeatable service and attention to detail in it to ensure the comfort during your stay. Offers 258 rooms with attractive facilities and has one of the largest function rooms in Bali. Enjoy a delicious meal at the Jempiring Restaurant near the lob',
                'hargaKamar' => 2850000,
                'gambarHotel1' => 'aston-1.png',
                'gambarHotel2' => 'aston-2.png',
                'gambarHotel3' => 'aston-3.png',
                'gambarHotel4' => 'aston-4.png',
                'gambarHotel5' => 'aston-5.png',
                'logoHotel' => 'aston',
                'stokKamar' => 4,
                'bintang' => 4,
                'lokasi' => 'Bali',
                'created_at' => now(),
                'updated_at' => now()
            ),
            10 =>
            array(
                'namaHotel' => 'Atanaya Kuta Bali',
                'deskripsiHotel' => 'A very strategic location flanked by Krisna by oleh dan BCA, and across from Trans Studio Mall and Wahana Games. - Near Dewi Sri food court night market and famous culinary spots. - Not far from Kuta, Legian, Seminyak and Jimbaran beaches.',
                'hargaKamar' => 1400000,
                'gambarHotel1' => 'atanaya-1.png',
                'gambarHotel2' => 'atanaya-2.png',
                'gambarHotel3' => 'atanaya-3.png',
                'gambarHotel4' => 'atanaya-4.png',
                'gambarHotel5' => 'atanaya-5.png',
                'logoHotel' => 'atanaya',
                'stokKamar' => 7,
                'bintang' => 4.5,
                'lokasi' => 'Bali',
                'created_at' => now(),
                'updated_at' => now()
            ),
            11 =>
            array(
                'namaHotel' => 'The Apurva Kempinski Bali',
                'deskripsiHotel' => 'Well-placed in the beaches area of Bali city, The Apurva Kempinski Bali provides a most conducive spot for you to take a break from your busy days. From here, guests can make the most of all that the lively city has to offer. With its convenient location, the property offers easy access to the city\'s must-see destinations.',
                'hargaKamar' => 3400000,
                'gambarHotel1' => 'apurva-1.png',
                'gambarHotel2' => 'apurva-2.png',
                'gambarHotel3' => 'apurva-3.png',
                'gambarHotel4' => 'apurva-4.png',
                'gambarHotel5' => 'apurva-5.png',
                'logoHotel' => 'apurva',
                'stokKamar' => 6,
                'bintang' => 4,
                'lokasi' => 'Bali',
                'created_at' => now(),
                'updated_at' => now()
            ),

        ));
    }
}
