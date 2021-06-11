<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('Hotels.index');
    }

    public function aboutUs(Request $request)
    {
        // dd($request);
        $user_id = session('user_id');
        if ($user_id == null) {
            return view('user.aboutUs');
        } else {
            $user[0] = User::where('id', $user_id)->get();
            // dd($user);
            return view('user.aboutUs', [
                'user' => $user,
            ]);
        }
    }
}
