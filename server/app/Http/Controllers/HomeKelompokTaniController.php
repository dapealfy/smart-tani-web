<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\KelompokTani;

class HomeKelompokTaniController extends Controller
{
    public function index()
    {
        $kelompokTani['kelompokTanis'] = KelompokTani::orderBy('id', 'desc')->paginate(3);
        return view('home.kelompokTani', $kelompokTani);
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;
 
		$kelompokTani['kelompokTanis'] = KelompokTani::where('nama','like',"%".$cari."%")
		->paginate();
 
		return view('home.kelompokTani', $kelompokTani);
 
	}

}
