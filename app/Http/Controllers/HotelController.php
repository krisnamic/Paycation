<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\User;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;
use PDF;

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
        if ($request->session()->get('user_id')) {
            $user_id = $request->session()->get('user_id');
            $user[0] = User::where('id', $user_id)->get();

            $hotel = Hotel::where('id', $id)->get();
            return view('user.bookingForm', [
                'user' => $user,
                'hotel' => $hotel
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function booking(Request $request)
    {
        //cek rule terlebih dahulu
        $rules = [
            'name'  => 'required',
            'phone' => 'required|numeric',
            'numberOfRooms' => 'required',
            'email' => 'required|email',
            'checkIn' => 'required',
            'checkOut' => 'required',
        ];
        //pesan error untuk setiap rule
        $messages = [
            'name.required'         => 'please enter your name',
            'phone.required'        => 'please enter your phone number',
            'phone.numeric'         => 'Phone Number must be numerical.',
            'email.required'        => 'Please enter your email.',
            'email.email'           => 'Email is not valid.',
            'checkIn.required'     => 'Please enter your checkIn date.',
            'checkOut.required'     => 'Please enter your checkOut date.',
        ];
        //validasi rule
        $validator = Validator::make($request->all(), $rules, $messages);
        //jika terdapat validasi yang salah
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $namaHotel = $request->namaHotel;
        $jumlahHari = $request->numOfDay;
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
        $pesanan->save();
        $user_id = $request->session()->get('user_id');
        $user[0] = User::where('id', $user_id)->get();

        // $pdf = PDF::loadView('user.invoice', $pesanan);
        // dd($pdf->stream('invoice'));
        // $pdf->stream('my.pdf', array('Attachment' => 0));
        // return $pdf->stream('invoice');
        return view('user.viewinvoice', [
            'user' => $user,
            'pesanan' => $pesanan,
            'namaHotel' => $namaHotel,
            'jumlahHari' => $jumlahHari,
        ]);
    }

    public function generatePDF(Request $request)
    {
        $pesanan = [
            'id'                => $request->id,
            'namaHotel'         =>  $request->namaHotel,
            'jumlahHari'        => $request->jumlahHari,
            'hargaPesanan'      =>  $request->hargaPesanan,
            'namaPemesan'       =>  $request->namaPemesan,
            'nomorTelepon'      =>  $request->nomorTelepon,
            'emailTamu'         =>  $request->emailTamu,
            'jumlahKamar'       =>  $request->jumlahKamar,
            'checkIn'           =>  $request->checkIn,
            'checkOut'          =>  $request->checkOut,
            'jamBooking'        =>  $request->jamBooking,
            'tanggalBooking'    =>  $request->tanggalBooking,
        ];
        // dd($request);
        $pdf = PDF::loadView('user.invoice', $pesanan);
        return $pdf->stream('invoice.pdf');
    }

    public function generatePDF2(Request $request)
    {
        $pesanan = [
            'namaHotel'         =>  $request->namaHotel,
            'jumlahHari'        =>  $request->jumlahHari,
            'hargaPesanan'      =>  $request->hargaPesanan,
            'namaPemesan'       =>  $request->namaPemesan,
            'nomorTelepon'      =>  $request->nomorTelepon,
            'emailTamu'         =>  $request->emailTamu,
            'jumlahKamar'       =>  $request->jumlahKamar,
            'checkIn'           =>  $request->checkIn,
            'checkOut'          =>  $request->checkOut,
            'jamBooking'        =>  $request->jamBooking,
            'tanggalBooking'    =>  $request->tanggalBooking,
        ];
        // dd($pesanan);
        $pdf = PDF::loadView('user.invoice', $pesanan);
        return $pdf->stream('invoice.pdf');
    }

    public function viewBookingDetail(Request $request)
    {
        if ($request->session()->get('user_id')) {
            $user_id =  $request->session()->get('user_id');
            $user[0] = User::where('id', $user_id)->get();

            $pesanan = Pesanan::where('ID_User', $user_id)->join('hotel', 'hotel.id', '=', 'pesanan.ID_Hotel')->get();
            $pesanan2 = Pesanan::where('ID_User', $user_id)->get();
            // dd($pesanan2);
            return view('user.detailBooking', [
                'user' => $user,
                'pesanan' => $pesanan,
                'pesanan2' => $pesanan2,
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function viewDetailInvoice(Request $request, $id)
    {
        // dd($request);
        if ($request->session()->get('user_id')) {
            $user_id =  $request->session()->get('user_id');
            $user[0] = User::where('id', $user_id)->get();
            $pesanan = Pesanan::where('id', $id)->get();
            $hotel = Hotel::where('id', $pesanan[0]->ID_Hotel)->get();
            // dd($hotel);
            return view('user.detailInvoice', [
                'user' => $user,
                'pesanan' => $pesanan[0],
                'hotel' => $hotel[0],
            ]);
        } else {
            return redirect()->back();
        }
        // dd($id);
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
