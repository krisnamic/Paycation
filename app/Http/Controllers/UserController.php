<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->get('user_id')) {
            $user_id = $request->session()->get('user_id');
            $user[0] = User::where('id', $user_id)->get();
            return view('user.viewProfile', ['user' => $user]);
        }
        return view('user.viewProfile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($id == session('user_id')) {
            $user[0] = User::where('id', $id)->get();
            return view('user.editProfile', ['user' => $user]);
        } else {
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->newPassword !== null) {
            $rules = [
                'newPassword'           => 'min:8',
                'noTelepon'             => 'numeric',
                //foto opsional, klo g diisi, pake foto default
                'foto'                  => 'image|mimes:jpg,jpeg,png'
            ];
            $messages = [
                'newPassword.required'     => 'Please enter your password.',
                'noTelepon.numeric'     => 'Phone Number must be numerical.',
                'foto.image'                  => 'Photo must be an image type',
                'foto.mimes'            => 'file type allowed only jpg, jpeg and png only'
            ];
        } else {
            $rules = [
                'noTelepon'             => 'numeric',
                //foto opsional, klo g diisi, pake foto default
                'foto'                  => 'image|mimes:jpg,jpeg,png'
            ];
            $messages = [
                'noTelepon.numeric'     => 'Phone Number must be numerical.',
                'foto.image'                  => 'Photo must be an image type',
                'foto.mimes'            => 'file type allowed only jpg, jpeg and png only'
            ];
        }

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $user = User::find($id);
        if ($request->foto != '') {
            $path = public_path() . '/img/userProfile/';
            if ($user->foto != ''  && $user->foto != null) {
                $file_old = $path . $user->foto;
                if ($user->foto !== 'default.png') {
                    unlink($file_old);
                }
            }
            //upload new file
            $file = $request->foto;
            $filename = time() . rand(1, 99999) . '.' . $request->foto->getClientOriginalExtension();
            $file->move($path, $filename);

            //for update in table
            $user->foto = $filename;
        }
        $user->update([
            'name'  => $request->name,
            'noTelepon' => $request->noTelepon,
            'alamat' => $request->alamat,
            'tanggalLahir' => $request->tanggalLahir,
        ]);
        if ($request->newPassword !== null) {
            $user->password = Hash::make($request->newPassword);
            $save = $user->save();
            return redirect('logout');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
