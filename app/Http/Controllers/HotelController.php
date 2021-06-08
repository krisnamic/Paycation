<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\User;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redis;

class HotelController extends Controller
{
    public function detailHotel(Request $request, $id)
    {

        // dd($id);
        if ($request->session()->get('user_id')) {
            $user_id = $request->session()->get('user_id');
            $user[0] = User::where('id', $user_id)->get();
            $hotel = Hotel::where('id', $id)->get();
            return view('user.detailHotel', [
                'hotel' => $hotel,
                'user' => $user
            ]);
        } else {
            $hotel = Hotel::where('id', $id)->get();
            return view('user.detailHotel', [
                'hotel' => $hotel,
            ]);
        }
    }

    public function bookingform(Request $request, $id)
    {
        // dd($id);
        $user_id = $request->session()->get('user_id');
        $user[0] = User::where('id', $user_id)->get();

        $hotel = Hotel::where('id', $id)->get();
        return view('user.bookingForm', [
            'user' => $user,
            'hotel' => $hotel
        ]);
    }

    public function booking(Request $request)
    {
        dd($request);
        $ldate = date('Y-m-d');
        $tes =  Carbon::now()->format('H:i:m');
        dd($tes);
        dd($request->name);
        dd($request->session()->get('user_id'));
        $pesanan = Pesanan::create([
            'ID_User'           =>  $request->session()->get('user_id'),
            'ID_Hotel'          =>  $request->id_hotel,
            'hargaPesanan'      =>  $request->grandTotalPrice,
            'namaPemesan'       =>  $request->name,
            'nomorTelepon'      =>  $request->phone,
            'emailTamu'         =>  $request->email,
            'jumlahKamar'       =>  $request->numberOfRooms,
            'checkIn'           =>  $request->checkIn,
            'checkOut'          =>  $request->checkOut,
            'jamBooking'        =>  Carbon::now()->format('H:i:m'),
            'tanggalBooking'    =>  date('Y-m-d'),
        ]);
    }
    public function search(Request $request)
    {
        $search_text = $_GET['query'];
        $hotel = Hotel::where('namaHotel', 'LIKE', '%' . $search_text . '%')
            // ->with('hargaKamar')  
            ->get();
        // dd($hotel);
        return view('welcome', [
            'hotel' => $hotel
        ]);
    }
}
