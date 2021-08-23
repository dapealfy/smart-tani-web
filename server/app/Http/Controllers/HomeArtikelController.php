<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Article;

class HomeArtikelController extends Controller
{
    public function index()
    {
        
        $article['articles'] = Article::orderBy('id', 'desc')->paginate(3);
        return view('home.artikel', $article);
    }
    
    public function cari(Request $request)
	{
		$cari = $request->cari;
 
		$article['articles'] = Article::where('title','like',"%".$cari."%")
		->paginate();
 
		return view('home.artikel', $article);
 
	}
    // public function beritaDetail()
    // {
    //     return view('home.artikelDetail');
    // }
    public function beritaDetail($id)
    {
        $article = Article::find($id);
        // dd($article);
        return view('home.artikelDetail', compact('article'));
    }
}
