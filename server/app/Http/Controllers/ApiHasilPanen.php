<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilPanen;


class ApiHasilPanen extends Controller
{
    public function index()
    {
        $hasil_panen = HasilPanen::with('kelompok_tani')->orderBy('id', 'asc')->get();

        $status = "OKEEEE";
        $status_code = "200";
        $message = "Berhasil mendapatkan data";
        return response()->json(compact('status', 'status_code', 'message', 'hasil_panen'), 200);
    }
}
