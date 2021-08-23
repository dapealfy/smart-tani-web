<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembibitan;


class ApiPembibitan extends Controller
{
    public function index()
    {
        $pembibitan = Pembibitan::orderBy('id', 'asc')->get();

        $status = "OK";
        $status_code = "200";
        $message = "Berhasil mendapatkan data";
        return response()->json(compact('status', 'status_code', 'message', 'pembibitan'), 200);
    }
}
