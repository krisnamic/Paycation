<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function detailHotel(Request $request, $id)
    {

        // dd($id);
        $hotel = Hotel::where('id', $id)->get();
        return view('user.detailHotel', [
            'hotel' => $hotel
        ]);
    }
}
