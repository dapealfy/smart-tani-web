<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perawatan;


class ApiPerawatan extends Controller
{
    public function index()
    {
        $perawatan = Perawatan::with('pembibitan')->orderBy('id', 'asc')->get();

        $status = "OK";
        $status_code = "200";
        $message = "Berhasil mendapatkan data";
        return response()->json(compact('status', 'status_code', 'message', 'perawatan'), 200);
    }
}
