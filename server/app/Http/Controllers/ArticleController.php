<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article['articles'] = Article::orderBy('id', 'desc')->get();
        return view('dashboard.articles.index', $article);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagePath = '/assets/images/car_model_default.png';
        if ($request->hasFile('image')) {
            $save = $request->file('image')->store('public/image');
            $filename = $request->file('image')->hashName();
            $imagePath = url('/') . '/storage/image/' . $filename;
        }

        Article::create([
            'image' => $imagePath,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->back()->with("OK", "Artikel berhasil di tambah.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('dashboard.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $imagePath = $article->image;
        if ($request->hasFile('image')) {
            $save = $request->file('image')->store('public/image');
            $filename = $request->file('image')->hashName();
            $imagePath = url('/') . '/storage/image/' . $filename;
        }
        $article->update([
            'image' => $imagePath,
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('dashboard.articles.index')
            ->with('OK', 'Artikel berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('dashboard.articles.index')
            ->with('OK', 'Artikel berhasil dihapus');
    }
}
