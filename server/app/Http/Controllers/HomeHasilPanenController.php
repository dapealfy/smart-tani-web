<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\HasilPanen;

class HomeHasilPanenController extends Controller
{
    public function index()
    {
        $hasilPanen['hasilPanens'] = HasilPanen::orderBy('id', 'desc')->get();
        return view('home.hasilPanen', $hasilPanen);
    }
}
