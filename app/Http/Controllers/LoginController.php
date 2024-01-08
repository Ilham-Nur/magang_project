<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index()
    {

        // $listuser = DB::table('tbl_user')->get();


        return view('login.index');
    }

    public function cekuser (Request $request)

    {
        $email = $request->input('email');
        $password = $request->input('password');

        // Create an array with email and password for authentication
        $credentials = [
            'email' => $email,
            'password' => $password,
        ];

    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json(['message' => 'Pengguna ditemukan.']);
        } else {
            return response()->json(['message' => 'Email atau password salah.'], 401);
        }

    }

    public function logout ()
    {
         Auth::logout();
         return redirect('/')->with('succes', 'Berhasil Logout');
    }
}
 