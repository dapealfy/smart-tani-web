<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class NotifikasiController extends Controller
{
    public function index()
    {
        $notifikasi['notifikasis'] = User::orderBy('id', 'desc')->get();
        // dd($notifikasi);
        return view('dashboard.notifikasis.index', $notifikasi);
    }
}
