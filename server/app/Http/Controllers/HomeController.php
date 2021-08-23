<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\KelompokTani;

class HomeController extends Controller
{
    public function index()
    {
        $article['articles'] = Article::orderBy('id', 'desc')->take(3)->get();
        $kelompokTani['kelompokTanis'] = KelompokTani::orderBy('id', 'desc')->get();
        return view('home.home', $article, $kelompokTani);
    }
}
