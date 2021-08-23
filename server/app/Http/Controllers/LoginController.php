<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('authentication.login.index');
    }

    public function authenticate(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user == null) {
            return redirect()->back()->with('ERR', 'Email yang Anda masukkan tidak terdaftar.');
        }
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back()->with('ERR', 'Password yang Anda masukkan salah.');
        }

        if (Auth::user()->role == 'admin') {
            return redirect()->route('dashboard.articles.index');
        } else {
            return redirect()->back()->with("ERR", "Anda tidak dapat masuk ke dashbor menggunakan akun ini, silahkan menghubungi admin");
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home')->with('OK', 'Berhasil keluar dari dashboard.');
    }
}
