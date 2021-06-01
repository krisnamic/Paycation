<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use App\Models\User;
use App\Models\Hotel;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $hotel = Hotel::all(); //retrieving models
        // dd($hotel);
        // return view('welcome', ['barang' => $barang]);
        if ($request->session()->get('user_id')) {
            $user_id = $request->session()->get('user_id');
            $user[0] = User::where('id', $user_id)->get();
            return view('welcome', [
                'user' => $user,
                'hotel' => $hotel,
            ]);
        }
        return view('welcome', [
            'hotel' => $hotel,
        ]);
    }
    public function loginPage(Request $request)
    {
        if ($request->session()->get('user_id') || $request->session()->get('admin_is_loggedin')) {
            return back();
        }
        return view('Login.login');
    }

    public function postLogin(Request $request)
    {
        //cek rule terlebih dahulu
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required|captcha',
        ];
        //pesan error untuk setiap rule
        $messages = [
            'email.required'        => 'Please enter your email.',
            'email.email'           => 'Email is not valid.',
            'password.required'     => 'Please enter your password.',
        ];
        //validasi rule
        $validator = Validator::make($request->all(), $rules, $messages);
        //jika terdapat validasi yang salah
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        //mengambil role dan id user/admin yang login
        $role = DB::table('users')->where('email', $request->email)->value('role');
        $user_id = DB::table('users')->where('email', $request->email)->value('id');
        $credentials = $request->only('email', 'password');
        //melakukan authentikasi terhadap email dan password yang dimasukkan user/admin
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); //membuat session yang baru
            if ($role == 'admin') {
                Session::put('admin_is_loggedin', 'loggedin');
                return redirect()->intended('/admin');
            } else {
                Session::put('user_id', $user_id);
                return redirect('/');
            }
        } else { //Login Fail
            Session::flash('error', 'Email or password is incorrect.');
            return redirect()->route('login');
        }
    }
    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function register(Request $request)
    {
        if ($request->session()->get('user_id') || $request->session()->get('admin_is_loggedin')) {
            return back();
        }
        return view('Login.register');
    }

    public function postRegister(Request $request)
    {
        $rules = [
            'name'                  => 'required',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|min:8|confirmed',
            'alamat'                => 'required',
            'noTelepon'             => 'required|numeric',
            'tanggalLahir'          => 'required',
            //foto opsional, klo g diisi, pake foto default
            'foto'                  => 'image|mimes:jpg,jpeg,png'
        ];

        $messages = [
            'name.required'         => 'Please enter your full name.',
            'email.required'        => 'Please enter your email.',
            'email.email'           => 'Email is not valid.',
            'email.unique'          => 'Email has already been registered.',
            'password.required'     => 'Please enter your password.',
            'password.confirmed'    => 'Password and Password confirmation did not match.',
            'alamat'                => 'Please enter your address.',
            'noTelepon.required'    => 'Please enter your phone number.',
            'noTelepon.numeric'     => 'Phone Number must be numerical.',
            'tanggalLahir'          => 'Please enter your birth date',
            'foto'                  => 'Photo must be an image type'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = now();
        $user->noTelepon = $request->noTelepon;
        $user->tanggalLahir = $request->tanggalLahir;
        if ($request->foto == null) {
            $user->foto = 'default.png';
        } else {
            $image = $request->file('foto');
            $name = time() . rand(1, 99999) . '.' . $request->foto->getClientOriginalExtension();
            $Path = public_path('/img/userProfile');
            $image->move($Path, $name);
            $user->foto = $name;
        }
        $user->alamat = $request->alamat;
        $user->role = 'user';
        $user->remember_token =  Str::random(60);
        $user->created_at = now();
        $user->updated_at = now();
        $save = $user->save();
        if ($save) {
            Session::flash('success', 'Register successful! You may login to access your data.');
            return redirect()->route('login');
        } else {
            Session::flash('errors', 'Register failed! Please try again.');
            return redirect()->route('register');
        }
    }
}
