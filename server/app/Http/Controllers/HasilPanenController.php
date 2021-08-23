<?php

namespace App\Http\Controllers;

use App\Models\HasilPanen;
use App\Models\KelompokTani;
use Illuminate\Http\Request;

class HasilPanenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hasil_panen['hasil_panens'] = HasilPanen::with('kelompok_tani')->orderBy('id', 'desc')->get();
        // dd($hasil_panen);
        return view('dashboard.hasil_panens.index', $hasil_panen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelompok_tani['kelompok_tanis'] = KelompokTani::orderBy('nama', 'asc')->get();
        return view('dashboard.hasil_panens.create', $kelompok_tani);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        HasilPanen::create([
            'kelompok_tani_id' => $request->kelompok_tani_id,
            'jadwal_panen' => $request->jadwal_panen,
            'jadwal_tanam' => $request->jadwal_tanam,
            'kebutuhan_bersih' => $request->kebutuhan_bersih,
            'hasil' => $request->hasil,
        ]);

        return redirect()->back()->with("OK", "HasilPanen berhasil di tambah.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HasilPanen  $hasil_panen
     * @return \Illuminate\Http\Response
     */
    public function show(HasilPanen $hasil_panen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HasilPanen  $hasil_panen
     * @return \Illuminate\Http\Response
     */
    public function edit(HasilPanen $hasil_panen)
    {
        $kelompok_tanis = KelompokTani::orderBy('nama', 'asc')->get();
        return view('dashboard.hasil_panens.edit', compact(array('kelompok_tanis', 'hasil_panen')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HasilPanen  $hasil_panen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HasilPanen $hasil_panen)
    {
        $hasil_panen->update([
            'kelompok_tani_id' => $request->kelompok_tani_id,
            'jadwal_panen' => $request->jadwal_panen,
            'jadwal_tanam' => $request->jadwal_tanam,
            'kebutuhan_bersih' => $request->kebutuhan_bersih,
            'hasil' => $request->hasil,
        ]);
        return redirect()->route('dashboard.hasil_panens.index')
            ->with('OK', 'HasilPanen berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HasilPanen  $hasil_panen
     * @return \Illuminate\Http\Response
     */
    public function destroy(HasilPanen $hasil_panen)
    {
        $hasil_panen->delete();

        return redirect()->route('dashboard.hasil_panens.index')
            ->with('OK', 'HasilPanen berhasil dihapus');
    }
}
