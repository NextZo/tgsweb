<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ControllerHandler extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/masuk');
    }

    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/kategori');
        }

        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function troli(Request $request)
    {
        // http://127.0.0.1:8000/troli?storage={%223%22:%22s,s,s%22,%224%22:%22xl,xl,xl%22}
        $k = collect((array)json_decode($request->storage)); // keranjang
        return view('troli', ['collection' => $k]);
    }

    public function postTroli(Request $request)
    {
        $transaksi = new Transaksi();
        $transaksi->barang = $request->storage;
        $transaksi->alamat = $request->alamat;
        $transaksi->hp = $request->hp;
        $transaksi->save();

        return redirect('/thankyou');
    }

    public function thanks()
    {
        return view('/thanks');
    }
}
