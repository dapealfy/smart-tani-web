<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pembibitan;

class HomePembibitanController extends Controller
{
    public function index()
    {
        $pembibitan['pembibitans'] = Pembibitan::orderBy('id', 'desc')->paginate(4);
        return view('home.pembibitan', $pembibitan);
    }
    
    public function cari(Request $request)
	{
		$cari = $request->cari;
 
		$pembibitan['pembibitans'] = Pembibitan::where('jenis','like',"%".$cari."%")
		->paginate();
 
		return view('home.pembibitan', $pembibitan);
 
	}
}
