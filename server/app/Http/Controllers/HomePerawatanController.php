<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pembibitan;
use App\Models\Perawatan;

class HomePerawatanController extends Controller
{
    public function index()
    {
        $perawatan['perawatans'] = Perawatan::orderBy('id', 'desc')->paginate(3);
        return view('home.perawatan', $perawatan);
    }
    
    public function cari(Request $request)
	{
		$cari = $request->cari;
		
	    $perawatan['perawatans'] = Perawatan::whereHas('pembibitan', function ($query) {
            $query->where('jenis', 'like',"%".request('cari')."%");
        })->paginate();
// ->where('pembibitans->jenis','like',"%".$cari."%")->paginate();
 
		return view('home.perawatan', $perawatan);
 
	}
}
