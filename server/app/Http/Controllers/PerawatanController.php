<?php

namespace App\Http\Controllers;

use App\Models\Pembibitan;
use App\Models\Perawatan;
use Illuminate\Http\Request;

class PerawatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perawatan['perawatans'] = Perawatan::orderBy('id', 'desc')->get();
        $pembibitan['pembibitans'] = Pembibitan::orderBy('jenis', 'asc')->get();
        return view('dashboard.perawatans.index', $perawatan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembibitan['pembibitans'] = Pembibitan::orderBy('jenis', 'asc')->get();
        return view('dashboard.perawatans.create', $pembibitan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Perawatan::create([
            'pembibitan_id' => $request->pembibitan_id,
            'jenis_hama' => $request->jenis_hama,
            'obat_hama' => $request->obat_hama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->back()->with("OK", "Perawatan berhasil di tambah.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perawatan  $perawatan
     * @return \Illuminate\Http\Response
     */
    public function show(Perawatan $perawatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perawatan  $perawatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perawatan $perawatan)
    {
        // dd($perawatan);
        $pembibitans = Pembibitan::orderBy('jenis', 'asc')->get();
        // dd($pembibitan);
        return view('dashboard.perawatans.edit', compact(array('perawatan', 'pembibitans')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perawatan  $perawatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perawatan $perawatan)
    {
        $perawatan->update([
            'pembibitan_id' => $request->pembibitan_id,
            'jenis_hama' => $request->jenis_hama,
            'obat_hama' => $request->obat_hama,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('dashboard.perawatans.index')
            ->with('OK', 'Perawatan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perawatan  $perawatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perawatan $perawatan)
    {
        $perawatan->delete();

        return redirect()->route('dashboard.perawatans.index')
            ->with('OK', 'Perawatan berhasil dihapus');
    }
}
