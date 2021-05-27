<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('Login.login');
    }   

    public function postLogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        return redirect('/');
    }   

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }   
    public function register()
    {
        return view('Login.register');
    }   

    public function postRegister(Request $request)
    {
        dd($request->all());
    }
}
