<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\User;
use Illuminate\Http\Request;

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
}
