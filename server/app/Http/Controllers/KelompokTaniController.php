<?php

namespace App\Http\Controllers;

use App\Models\KelompokTani;
use Illuminate\Http\Request;

class KelompokTaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelompok_tani['kelompok_tanis'] = KelompokTani::orderBy('id', 'desc')->paginate(3);
        return view('dashboard.kelompok_tanis.index', $kelompok_tani);
    }
    public function kelompokTaniDetail($id)
    {
        $kelompokTani = KelompokTani::where('id', $id)->get()->first();
        return view('home.kelompokTaniDetail', compact('kelompokTani'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kelompok_tanis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $save = $request->file('image')->store('public/image');
            $filename = $request->file('image')->hashName();
            $imagePath = url('/') . '/storage/image/' . $filename;
        }

        KelompokTani::create([
            'image' => $imagePath,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'ketua' => $request->ketua,
            'penyuluh' => $request->penyuluh,
            'kecamatan' => $request->kecamatan,
            'luas_tanah' => $request->luas_tanah,
            'anggota' => $request->anggota,
            'unggulan' => $request->unggulan,
            'lat' => $request->lat,
            'lng' => $request->lng,
        ]);

        return redirect()->back()->with("OK", "KelompokTani berhasil di tambah.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KelompokTani  $kelompok_tani
     * @return \Illuminate\Http\Response
     */
    public function show(KelompokTani $kelompok_tani)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KelompokTani  $kelompok_tani
     * @return \Illuminate\Http\Response
     */
    public function edit(KelompokTani $kelompok_tani)
    {
        return view('dashboard.kelompok_tanis.edit', compact('kelompok_tani'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelompokTani  $kelompok_tani
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelompokTani $kelompok_tani)
    {
        $imagePath = $kelompok_tani->image;
        if ($request->hasFile('image')) {
            $save = $request->file('image')->store('public/image');
            $filename = $request->file('image')->hashName();
            $imagePath = url('/') . '/storage/image/' . $filename;
        }
        $kelompok_tani->update([
            'image' => $imagePath,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'ketua' => $request->ketua,
            'penyuluh' => $request->penyuluh,
            'kecamatan' => $request->kecamatan,
            'luas_tanah' => $request->luas_tanah,
            'anggota' => $request->anggota,
            'unggulan' => $request->unggulan,
            'lat' => $request->lat,
            'lng' => $request->lng,
        ]);
        return redirect()->route('dashboard.kelompok_tanis.index')
            ->with('OK', 'KelompokTani berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelompokTani  $kelompok_tani
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelompokTani $kelompok_tani)
    {
        $kelompok_tani->delete();

        return redirect()->route('dashboard.kelompok_tanis.index')
            ->with('OK', 'KelompokTani berhasil dihapus');
    }
}
