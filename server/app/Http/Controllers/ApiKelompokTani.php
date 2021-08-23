<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelompokTani;


class ApiKelompokTani extends Controller
{
    public function index()
    {
        $kelompok_tani = KelompokTani::orderBy('id', 'asc')->get();

        $status = "OK";
        $status_code = "200";
        $message = "Berhasil mendapatkan data";
        return response()->json(compact('status', 'status_code', 'message', 'kelompok_tani'), 200);
    }
}
